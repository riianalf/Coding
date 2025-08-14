<x-layouts.app :title="'Daftar Pasien'">
   <div class="p-6">
      <div class="flex items-center justify-between mb-6">
         <h1 class="text-2xl font-bold text-blue-700">Daftar Pasien</h1>
         <button type="button" data-hs-overlay="#modal-daftar-pasien"
            class="hs-overlay-open:bg-blue-700 hs-overlay-open:text-white inline-flex items-center gap-x-2 rounded-lg bg-blue-600 px-4 py-2 text-white shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <i class="flaticon-add-user text-lg"></i>
            Tambah Pasien
         </button>
      </div>
      <div class="overflow-x-auto">
         <table class="hs-table-auto w-full text-sm text-left bg-white dark:bg-neutral-900 rounded-lg shadow-lg">
            <thead class="bg-blue-50 dark:bg-neutral-800">
               <tr>
                  <th class="py-3 px-4 font-semibold text-blue-700 dark:text-neutral-200">No</th>
                  <th class="py-3 px-4 font-semibold text-blue-700 dark:text-neutral-200">Nama</th>
                  <th class="py-3 px-4 font-semibold text-blue-700 dark:text-neutral-200">Tanggal Lahir</th>
                  <th class="py-3 px-4 font-semibold text-blue-700 dark:text-neutral-200">Jenis Kelamin</th>
                  <th class="py-3 px-4 font-semibold text-blue-700 dark:text-neutral-200">Alamat</th>
               </tr>
            </thead>
            <tbody>
               {{-- Data pasien akan ditampilkan di sini --}}
               <tr class="hover:bg-blue-50 dark:hover:bg-neutral-800 transition">
                  <td class="py-2 px-4 border-b">1</td>
                  <td class="py-2 px-4 border-b">Contoh Pasien</td>
                  <td class="py-2 px-4 border-b">01-01-1990</td>
                  <td class="py-2 px-4 border-b">Laki-laki</td>
                  <td class="py-2 px-4 border-b">Jl. Contoh No. 1</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>

   <!-- Modal Form Pendaftaran Pasien -->
   <div id="modal-daftar-pasien"
      class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[9999] overflow-y-auto bg-black/50  items-center justify-center">
      <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-lg w-full max-w-md mx-auto p-6 relative">
         <button type="button"
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-neutral-200"
            data-hs-overlay-close>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
               stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
         </button>
         <h2 class="text-xl font-bold mb-4 text-blue-700">Form Pendaftaran Pasien</h2>
         <form>
            <div class="mb-4">
               <label class="block mb-1 font-medium text-gray-700 dark:text-neutral-200">Nama</label>
               <input type="text"
                  class="hs-input w-full rounded-lg border-gray-300 dark:border-neutral-700 focus:border-blue-500 focus:ring-blue-500"
                  placeholder="Nama Pasien" />
            </div>
            <div class="mb-4">
               <label class="block mb-1 font-medium text-gray-700 dark:text-neutral-200">Tanggal Lahir</label>
               <input type="date"
                  class="hs-input w-full rounded-lg border-gray-300 dark:border-neutral-700 focus:border-blue-500 focus:ring-blue-500" />
            </div>
            <div class="mb-4">
               <label class="block mb-1 font-medium text-gray-700 dark:text-neutral-200">Jenis Kelamin</label>
               <select
                  class="hs-select w-full rounded-lg border-gray-300 dark:border-neutral-700 focus:border-blue-500 focus:ring-blue-500">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
               </select>
            </div>
            <div class="mb-4">
               <label class="block mb-1 font-medium text-gray-700 dark:text-neutral-200">Alamat</label>
               <textarea
                  class="hs-input w-full rounded-lg border-gray-300 dark:border-neutral-700 focus:border-blue-500 focus:ring-blue-500"
                  rows="2" placeholder="Alamat"></textarea>
            </div>
            <div class="flex justify-end">
               <button type="submit"
                  class="inline-flex items-center gap-x-2 rounded-lg bg-blue-600 px-4 py-2 text-white shadow-md transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <i class="flaticon-add-user text-lg"></i>
                  Simpan
               </button>
            </div>
         </form>
      </div>
   </div>
</x-layouts.app>
