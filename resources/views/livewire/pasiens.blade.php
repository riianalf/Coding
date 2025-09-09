<div class="p-4">
    <div class="mb-4 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
        <div>
            <h2 class="text-lg font-semibold">Kelola Pasien</h2>
            <p class="text-sm text-gray-600">Pusat pengelolaan data pasien</p>
        </div>

        <div class="flex items-center gap-2">
            <input wire:model.debounce.300ms="search" type="text" placeholder="Cari nama / NIK / BPJS"
                class="border rounded px-3 py-2" />
            <button wire:click="create" class="bg-blue-600 text-white px-3 py-2 rounded">Tambah</button>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="mb-4 text-sm text-green-700">{{ session('message') }}</div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr class="text-left text-sm text-gray-600">
                    <th class="px-3 py-2">Nama</th>
                    <th class="px-3 py-2">NIK</th>
                    <th class="px-3 py-2">BPJS</th>
                    <th class="px-3 py-2">Alamat</th>
                    <th class="px-3 py-2">Jenis Kelamin</th>
                    <th class="px-3 py-2">Lahir</th>
                    <th class="px-3 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                @forelse($patients as $patient)
                    <tr class="border-t">
                        <td class="px-3 py-2">{{ $patient->full_name }}</td>
                        <td class="px-3 py-2">{{ $patient->nik }}</td>
                        <td class="px-3 py-2">{{ $patient->bpjs_number ?? '-' }}</td>
                        <td class="px-3 py-2">
                            {{ $patient->desa }}{{ $patient->kecamatan ? ', ' . $patient->kecamatan : '' }}</td>
                        <td class="px-3 py-2">{{ $patient->gender ? ucfirst($patient->gender) : '-' }}</td>
                        <td class="px-3 py-2">{{ $patient->birth_date ? $patient->birth_date->format('Y-m-d') : '-' }}
                        </td>
                        <td class="px-3 py-2">
                            <button wire:click="edit({{ $patient->id }})" class="text-blue-600 mr-2">Edit</button>
                            <button wire:click="confirmDelete({{ $patient->id }})" class="text-red-600">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-3 py-4 text-center text-gray-500">Tidak ada data pasien.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $patients->links() }}
    </div>

    <!-- Modal -->
    @if ($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
            <div class="bg-white rounded shadow w-full max-w-lg p-4">
                <h3 class="font-semibold mb-2">{{ $editing ? 'Edit Pasien' : 'Tambah Pasien' }}</h3>

                <div class="grid grid-cols-1 gap-2">
                    <div>
                        <label class="block text-sm">NIK</label>
                        <input wire:model.defer="state.nik" class="w-full border rounded px-2 py-1" />
                        @error('state.nik')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm">Nama Lengkap</label>
                        <input wire:model.defer="state.full_name" class="w-full border rounded px-2 py-1" />
                        @error('state.full_name')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block text-sm">Tanggal Lahir</label>
                            <input wire:model.defer="state.birth_date" type="date"
                                class="w-full border rounded px-2 py-1" />
                        </div>
                        <div>
                            <label class="block text-sm">Jenis Kelamin</label>
                            <select wire:model.defer="state.gender" class="w-full border rounded px-2 py-1">
                                <option value="">--</option>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block text-sm">Desa</label>
                            <input wire:model.defer="state.desa" class="w-full border rounded px-2 py-1" />
                        </div>
                        <div>
                            <label class="block text-sm">Kecamatan</label>
                            <input wire:model.defer="state.kecamatan" class="w-full border rounded px-2 py-1" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block text-sm">Kabupaten</label>
                            <input wire:model.defer="state.kabupaten" class="w-full border rounded px-2 py-1" />
                        </div>
                        <div>
                            <label class="block text-sm">Provinsi</label>
                            <input wire:model.defer="state.provinsi" class="w-full border rounded px-2 py-1" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="block text-sm">Nomor HP</label>
                            <input wire:model.defer="state.phone" class="w-full border rounded px-2 py-1" />
                        </div>
                        <div>
                            <label class="block text-sm">Email</label>
                            <input wire:model.defer="state.email" type="email"
                                class="w-full border rounded px-2 py-1" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 items-center">
                        <div>
                            <label class="block text-sm">No. BPJS</label>
                            <input wire:model.defer="state.bpjs_number" class="w-full border rounded px-2 py-1" />
                        </div>
                        <div class="flex items-center gap-2">
                            <input wire:model.defer="state.bpjs_active" type="checkbox" id="bpjs_active" />
                            <label for="bpjs_active" class="text-sm">BPJS aktif</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4 flex justify-end gap-2">
                    <button wire:click="$set('showModal', false)" class="px-3 py-2 border rounded">Batal</button>
                    <button wire:click="save" class="px-3 py-2 bg-blue-600 text-white rounded">Simpan</button>
                </div>
            </div>
        </div>
    @endif

    <script>
        window.addEventListener('confirm-delete', event => {
            if (confirm('Hapus pasien ini?')) {
                Livewire.emit('deleteConfirmed', event.detail.id)
            }
        })
    </script>
</div>
