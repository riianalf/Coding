<x-layouts.app :title="'Registrasi Pasien'">
   <div class="p-4 space-y-8">
      <!-- Registrasi Pasien Rawat Jalan (Fresh Style) -->
      <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-lg p-8 mb-6">
         <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
            <div>
               <h1 class="text-3xl font-extrabold text-gray-800 dark:text-white mb-1">Pendaftaran Rawat Jalan</h1>
               <div class="font-semibold text-lg text-gray-700 dark:text-neutral-200">Pencarian Pasien</div>
            </div>
            <button
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-2 transition">
               <i class="flaticon-add-user text-lg"></i> Peserta Baru
            </button>
         </div>
         <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4 border">
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
         </form>
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
                     <td class="py-2 px-3 border-b">1990-01-01<br><span class="text-xs text-gray-500">35 tahun</span>
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
                     <td class="py-2 px-3 border-b">1992-05-10<br><span class="text-xs text-gray-500">33 tahun</span>
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

      <!-- Bagian Bawah: Tabel Antrean Pasien Poli (Gabungan) -->
      <div class="bg-white dark:bg-neutral-900 rounded-lg shadow-lg p-4">
         <h2 class="text-lg font-semibold text-blue-700 mb-2">Antrean Pasien Poli</h2>
         <table class="hs-table-auto w-full text-sm text-left bg-white dark:bg-neutral-900 rounded-lg">
            <thead class="bg-blue-50 dark:bg-neutral-800">
               <tr>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">ID</th>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">Timestamp</th>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">Pasien</th>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">Jenis Daftar</th>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">Poli</th>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">Status</th>
                  <th class="py-2 px-3 font-semibold text-blue-700 dark:text-neutral-200">Aksi</th>
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
</x-layouts.app>
