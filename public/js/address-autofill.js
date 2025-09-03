document.addEventListener("DOMContentLoaded", function () {
    const desaInput = document.getElementById("input-desa");
    const kecamatanInput = document.getElementById("input-kecamatan");
    const kabupatenInput = document.getElementById("input-kabupaten");
    const provinsiInput = document.getElementById("input-provinsi");

    if (!desaInput) return;

    let areas = [];
    let useRemote = true;

    // try server-side search by default (fast for full dataset)
    // if server-side not available, fallback to local JSON file
    function remoteSearch(q) {
        return fetch(`/api/areas/search?q=${encodeURIComponent(q)}`)
            .then((r) => r.json())
            .catch(() => []);
    }

    fetch("/data/indonesia-areas.json")
        .then((r) => r.json())
        .then((json) => {
            areas = json;
        })
        .catch(() => {
            areas = [];
            // if local file missing, still rely on remote
        });

    function findMatches(query) {
        query = (query || "").toLowerCase().trim();
        if (!query) return [];
        return areas
            .filter(
                (a) =>
                    a.desa.toLowerCase().includes(query) ||
                    a.kecamatan.toLowerCase().includes(query)
            )
            .slice(0, 10);
    }

    // simple dropdown
    const list = document.createElement("div");
    list.className = "address-autofill-list";
    list.style.position = "absolute";
    list.style.zIndex = "1000";
    list.style.background = "#fff";
    list.style.border = "1px solid #ddd";
    list.style.maxHeight = "200px";
    list.style.overflow = "auto";
    list.style.width = desaInput.offsetWidth + "px";
    list.style.display = "none";
    desaInput.parentNode.appendChild(list);

    // debounce helper
    function debounce(fn, wait) {
        let t;
        return function () {
            const args = arguments;
            clearTimeout(t);
            t = setTimeout(() => fn.apply(null, args), wait);
        };
    }

    const onInput = debounce(function (e) {
        const q = (e.target.value || "").trim();
        if (!q) {
            list.style.display = "none";
            return;
        }

        // try remote first
        remoteSearch(q).then((remoteMatches) => {
            let matches =
                Array.isArray(remoteMatches) && remoteMatches.length
                    ? remoteMatches
                    : [];
            // if remote empty and we have local dataset, fallback to client filter
            if (!matches.length && areas && areas.length) {
                matches = findMatches(q);
            }

            while (list.firstChild) list.removeChild(list.firstChild);
            if (!matches.length) {
                list.style.display = "none";
                return;
            }
            matches.slice(0, 10).forEach((m) => {
                const item = document.createElement("div");
                item.style.padding = "6px 8px";
                item.style.cursor = "pointer";
                item.textContent = `${m.desa} — ${m.kecamatan}, ${m.kabupaten} (${m.provinsi})`;
                item.addEventListener("click", function () {
                    desaInput.value = m.desa;
                    kecamatanInput.value = m.kecamatan;
                    kabupatenInput.value = m.kabupaten;
                    provinsiInput.value = m.provinsi;
                    list.style.display = "none";
                });
                list.appendChild(item);
            });
            list.style.display = "block";
        });
    }, 250);

    desaInput.addEventListener("input", onInput);

    document.addEventListener("click", function (e) {
        if (!list.contains(e.target) && e.target !== desaInput) {
            list.style.display = "none";
        }
    });
});
