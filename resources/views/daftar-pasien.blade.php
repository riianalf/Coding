<x-layouts.app :title="'Registrasi Pasien'">
   <div class="p-4 space-y-8">
      <!-- Registrasi Pasien Rawat Jalan (Fresh Style) -->
      <div class="mx-auto">
         <div class="bg-white rounded-xl shadow-xl p-4 sm:p-7 dark:bg-neutral-800">
            <div class="mb-8">
               <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                  Registrasi Pasien
               </h2>
               <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Manage your name, password and account settings.
               </p>
            </div>
            <form>
               <div class="grid sm:grid-cols-4 gap-4">
                  <div class="sm:col-span-3 border">
                     <!-- Grid -->
                     <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 border">
                        <div class="sm:col-span-3 border">
                           <label for="af-account-full-name"
                              class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                              Cari Nama Pasien
                           </label>
                           <div class="hs-tooltip inline-block">
                              <svg
                                 class="hs-tooltip-toggle ms-1 inline-block size-3 text-gray-400 dark:text-neutral-600"
                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 viewBox="0 0 16 16">
                                 <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                 <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                              </svg>
                              <span
                                 class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-2xs dark:bg-neutral-700"
                                 role="tooltip">
                                 Displayed on public forums, such as Preline
                              </span>
                           </div>
                        </div>
                        <!-- End Col -->
                        <div class="sm:col-span-9 border">
                           <input id="af-account-full-name" type="text"
                              class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                              placeholder="Nama Pasien">
                           <!-- Popover -->
                           <div class="hs-tooltip [--trigger:focus] [--placement:bottom] inline-block">
                              <button type="button"
                                 class="hs-tooltip-toggle py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 disabled:pointer-events-none">
                                 {{-- <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                     <path d="m18 15-6-6-6 6"></path>
                                  </svg> --}}
                                 Cari Nama Pasien
                                 <span
                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border border-gray-200 text-sm text-gray-600 rounded-lg shadow-md dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
                                    role="tooltip">
                                    Focus me
                                 </span>
                              </button>
                           </div>
                           <!-- End Popover -->
                        </div>
                        <!-- End Col -->
                     </div>
                     <!-- End Grid -->
                     <div class="mt-5 flex justify-end gap-x-2">
                        <button type="button"
                           class="py-1 px-2 sm:p-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                           Tambah Pasien Baru
                        </button>
                        <button type="button"
                           class="py-1 px-2 sm:p-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                           Cancel
                        </button>
                        <button type="button"
                           class="py-1 px-2 sm:p-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                           Save changes
                        </button>
                     </div>

                  </div>

                  <!-- Alamat otomatis -->
                  <div class="mt-6 sm:col-span-12 border-t pt-4">
                     <h3 class="text-sm font-semibold text-gray-700 dark:text-neutral-200 mb-2">Alamat</h3>
                     <div class="grid sm:grid-cols-12 gap-2 sm:gap-4">
                        <div class="sm:col-span-6">
                           <label class="block text-xs mb-1">Desa / Kelurahan</label>
                           <input id="input-desa" type="text" class="w-full rounded border-gray-300 p-2"
                              placeholder="Ketik nama desa...">
                        </div>
                        <div class="sm:col-span-6">
                           <label class="block text-xs mb-1">Kecamatan</label>
                           <input id="input-kecamatan" type="text" class="w-full rounded border-gray-300 p-2"
                              placeholder="Kecamatan" readonly>
                        </div>
                        <div class="sm:col-span-6">
                           <label class="block text-xs mb-1">Kabupaten / Kota</label>
                           <input id="input-kabupaten" type="text" class="w-full rounded border-gray-300 p-2"
                              placeholder="Kabupaten / Kota" readonly>
                        </div>
                        <div class="sm:col-span-6">
                           <label class="block text-xs mb-1">Provinsi</label>
                           <input id="input-provinsi" type="text" class="w-full rounded border-gray-300 p-2"
                              placeholder="Provinsi" readonly>
                        </div>
                     </div>
                  </div>
                  <div class="sm:col-span-1 border">
                     <div
                        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="p-4 md:p-5">
                           <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                              Card title
                           </h3>
                           <p class="mt-2 text-gray-500 dark:text-neutral-400">
                              With supporting text below as a natural lead-in to additional content.
                           </p>
                           <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600"
                              href="#">
                              Card link
                              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="m9 18 6-6-6-6"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </form>

         </div>
         {{-- <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4 border">
            <div class="col-span-1">
               <select class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                  <option>No. JKN-KIS</option>
                  <option>NIK</option>
                  <option>Alamat</option>
               </select>
            </div>
            <div class="col-span-2 flex flex-col gap-2">
               <input type="text" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                  placeholder="Masukkan kata kunci...">
               <input type="text" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                  placeholder="Nama">
            </div>
            <div class="col-span-1 flex flex-col gap-2">
               <button type="submit"
                  class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow mt-1">Pasien
                  Baru</button>
               <button type="submit"
                  class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow mt-1">Cari</button>
            </div>
         </form> --}}


         <div class="text-xs text-blue-700 italic mb-2">Tidak ada pasien dengan pencarian tersebut.</div>
         <div class="overflow-x-auto rounded-lg border border-blue-100">
            <table class="min-w-full text-xs bg-blue-50">
               <thead>
                  <tr>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">Aksi</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">Nama Pasien</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">No. Rekam Medis</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">NIK</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">Alamat</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">ID Peserta BPJS</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">Jenis Kelamin</th>
                     <th class="px-3 py-2 font-bold text-left bg-blue-200">Tanggal Lahir & Umur</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer mb-1">Daftar</span><br>
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer">Edit
                           Profil</span>
                     </td>
                     <td class="py-2 px-3 border-b">Budi<br> Santoso</td>
                     <td class="py-2 px-3 border-b">RM001</td>
                     <td class="py-2 px-3 border-b">1234567890123456</td>
                     <td class="py-2 px-3 border-b">Jl. Melati No. 1</td>
                     <td class="py-2 px-3 border-b">-</td>
                     <td class="py-2 px-3 border-b">Laki-laki</td>
                     <td class="py-2 px-3 border-b">1990-01-01<br><span class="text-xs text-gray-500">35
                           tahun</span>
                     </td>
                  </tr>
                  <tr>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer mb-1">Daftar</span><br>
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer">Edit
                           Profil</span>
                     </td>
                     <td class="py-2 px-3 border-b">Siti<br> Aminah</td>
                     <td class="py-2 px-3 border-b">RM002</td>
                     <td class="py-2 px-3 border-b">9876543210987654</td>
                     <td class="py-2 px-3 border-b">Jl. Kenanga No. 2</td>
                     <td class="py-2 px-3 border-b">0001234567890</td>
                     <td class="py-2 px-3 border-b">Perempuan</td>
                     <td class="py-2 px-3 border-b">1992-05-10<br><span class="text-xs text-gray-500">33
                           tahun</span>
                     </td>
                  </tr>
                  <!-- Contoh: tampilkan maksimal 5 baris, tambahkan baris dummy jika kurang dari 5 -->
                  <tr class="bg-transparent">
                     <td colspan="8" class="py-2"></td>
                  </tr>
                  <tr class="bg-transparent">
                     <td colspan="8" class="py-2"></td>
                  </tr>
                  <tr class="bg-transparent">
                     <td colspan="8" class="py-2"></td>
                  </tr>
               </tbody>
            </table>
            <!-- Footer tabel: jumlah data & pagination -->
            <div
               class="flex flex-col md:flex-row md:items-center md:justify-between gap-2 mt-2 px-2 py-1 bg-blue-50 rounded-b-lg border-t border-blue-100">
               <div class="text-xs text-gray-700">Menampilkan 1-2 dari 2 data</div>
               <div class="flex justify-end items-center gap-2">
                  <button class="px-2 py-1 rounded bg-blue-100 text-blue-700 text-xs font-semibold"
                     disabled>&lt;</button>
                  <span class="text-xs">1</span>
                  <button class="px-2 py-1 rounded bg-blue-100 text-blue-700 text-xs font-semibold"
                     disabled>&gt;</button>
               </div>
            </div>
         </div>
      </div>

      <!-- Panggilan Antrean Daftar & Filter Tanggal -->
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4">
         <div class="flex items-center gap-2">
            <label class="font-semibold text-gray-700 dark:text-neutral-200">Filter Tanggal:</label>
            <input type="date" class="rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500">
            <span class="mx-1">s/d</span>
            <input type="date" class="rounded border-gray-300 focus:border-blue-500 focus:ring-blue-500">
            <button
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-3 py-1 rounded-lg">Terapkan</button>
         </div>
      </div>

      <!-- Bagian Bawah: Tabel Antrean Pasien Poli (Gabungan) Responsive -->
      <div class="bg-white dark:bg-neutral-900 rounded-lg shadow-lg p-4">
         <h2 class="text-lg font-semibold text-blue-700 mb-2">Antrean Pasien Poli</h2>
         <div class="overflow-x-auto rounded-lg">
            <table class="min-w-full text-sm text-left bg-white dark:bg-neutral-900 rounded-lg">
               <thead class="bg-blue-50 dark:bg-neutral-800">
                  <tr>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">ID
                     </th>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">
                        Timestamp
                     </th>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">
                        Pasien
                     </th>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">Jenis
                        Daftar</th>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">Poli
                     </th>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">
                        Status
                     </th>
                     <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200 whitespace-nowrap">Aksi
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <!-- Contoh data antrean pasien poli -->
                  <tr class="hover:bg-blue-50 dark:hover:bg-neutral-800 transition">
                     <td class="py-2 px-3 border-b">
                        <div>DFT-001</div>
                        <div class="text-xs text-gray-500">No. 12</div>
                     </td>
                     <td class="py-2 px-3 border-b">2025-08-15 08:30</td>
                     <td class="py-2 px-3 border-b">
                        <div class="font-semibold">Budi Santoso</div>
                        <div class="text-xs text-gray-500">NIK: 1234567890123456</div>
                        <div class="text-xs text-gray-500">Jl. Melati No. 1</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs font-medium">Umum</span>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <div>Poli Umum</div>
                        <div class="text-xs text-gray-500">dr. Andi</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded text-xs font-medium">Menunggu</span>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer">Edit</span>
                        <span
                           class="inline-block bg-red-100 text-red-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer ml-1">Hapus</span>
                     </td>
                  </tr>
                  <tr class="hover:bg-blue-50 dark:hover:bg-neutral-800 transition">
                     <td class="py-2 px-3 border-b">
                        <div>DFT-002</div>
                        <div class="text-xs text-gray-500">No. 13</div>
                     </td>
                     <td class="py-2 px-3 border-b">2025-08-15 08:45</td>
                     <td class="py-2 px-3 border-b">
                        <div class="font-semibold">Siti Aminah</div>
                        <div class="text-xs text-gray-500">NIK: 9876543210987654</div>
                        <div class="text-xs text-gray-500">Jl. Kenanga No. 2</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium">BPJS</span>
                        <div class="text-xs text-gray-500">ID: 0001234567890</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <div>Poli Gigi</div>
                        <div class="text-xs text-gray-500">drg. Sari</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs font-medium">Proses</span>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer">Edit</span>
                        <span
                           class="inline-block bg-red-100 text-red-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer ml-1">Hapus</span>
                     </td>
                  </tr>
                  <tr class="hover:bg-blue-50 dark:hover:bg-neutral-800 transition">
                     <td class="py-2 px-3 border-b">
                        <div>DFT-003</div>
                        <div class="text-xs text-gray-500">No. 14</div>
                     </td>
                     <td class="py-2 px-3 border-b">2025-08-15 09:00</td>
                     <td class="py-2 px-3 border-b">
                        <div class="font-semibold">Ahmad Fauzi</div>
                        <div class="text-xs text-gray-500">NIK: 1122334455667788</div>
                        <div class="text-xs text-gray-500">Jl. Mawar No. 3</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium">BPJS</span>
                        <div class="text-xs text-gray-500">ID: 0009876543210</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <div>Poli Anak</div>
                        <div class="text-xs text-gray-500">dr. Budi</div>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium">Selesai</span>
                     </td>
                     <td class="py-2 px-3 border-b">
                        <span
                           class="inline-block bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer">Edit</span>
                        <span
                           class="inline-block bg-red-100 text-red-700 px-2 py-0.5 rounded text-xs font-medium cursor-pointer ml-1">Hapus</span>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <script src="/js/address-autofill.js"></script>
</x-layouts.app>
