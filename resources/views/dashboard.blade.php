<x-layouts.app :title="__('Dashboard')">
    <!-- Features -->
    <div
        class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-2xl px-4 py-10 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 mx-auto">
        <!-- Grid -->
        <div class="grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-4 lg:gap-8">
            <!-- Stats -->
            <div
                class="max-w-xs flex flex-col bg-white border border-gray-200 border-t-4 border-t-blue-600 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 p-4">
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Accuracy rate</h4>
                <p class="mt-2 sm:mt-3 text-3xl font-bold text-blue-600">99.95%</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">in fulfilling orders</p>
            </div>
            <!-- End Stats -->

            <!-- Stats -->
            <div
                class="max-w-xs flex flex-col bg-white border border-gray-200 border-t-4 border-t-blue-600 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 p-4">
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Startup businesses</h4>
                <p class="mt-2 sm:mt-3 text-3xl font-bold text-blue-600">2,000+</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">partner with Preline</p>
            </div>
            <!-- End Stats -->

            <!-- Stats -->
            <div
                class="max-w-xs flex flex-col bg-white border border-gray-200 border-t-4 border-t-blue-600 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 p-4">
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Happy customer</h4>
                <p class="mt-2 sm:mt-3 text-3xl font-bold text-blue-600">85%</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">this year alone</p>
            </div>
            <!-- End Stats -->
            <!-- Stats -->
            <div
                class="max-w-xs flex flex-col bg-white border border-gray-200 border-t-4 border-t-blue-600 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 p-4">
                <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Happy customer</h4>
                <p class="mt-2 sm:mt-3 text-3xl font-bold text-blue-600">85%</p>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">this year alone</p>
            </div>
            <!-- End Stats -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
    <div
        class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 mt-4">
        <h2 class="text-lg font-semibold mb-4 text-neutral-800 dark:text-neutral-100">Jadwal Dokter Hari Ini</h2>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b border-neutral-200 dark:border-neutral-700">
                    <th class="py-2 px-4">Nama Dokter</th>
                    <th class="py-2 px-4">Spesialis</th>
                    <th class="py-2 px-4">Jam Praktik</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwalDokter ?? [] as $dokter)
                    <tr class="border-b border-neutral-100 dark:border-neutral-800">
                        <td class="py-2 px-4">{{ $dokter['nama'] }}</td>
                        <td class="py-2 px-4">{{ $dokter['spesialis'] }}</td>
                        <td class="py-2 px-4">{{ $dokter['jam'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-4 text-center text-neutral-500">Tidak ada jadwal dokter hari ini.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
      <div class="grid auto-rows-min gap-4 md:grid-cols-3">
         <div
            class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 flex flex-col justify-center items-center">
            <div class="text-2xl font-bold text-blue-600">{{ $jumlahPasien ?? '0' }}</div>
            <div class="text-sm text-neutral-600 dark:text-neutral-300 mt-2">Total Pasien</div>
         </div>
         <div
            class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 flex flex-col justify-center items-center">
            <div class="text-2xl font-bold text-green-600">{{ $jumlahKunjungan ?? '0' }}</div>
            <div class="text-sm text-neutral-600 dark:text-neutral-300 mt-2">Kunjungan Hari Ini</div>
         </div>
         <div
            class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 flex flex-col justify-center items-center">
            <div class="text-2xl font-bold text-purple-600">{{ $jumlahDokter ?? '0' }}</div>
            <div class="text-sm text-neutral-600 dark:text-neutral-300 mt-2">Dokter Bertugas</div>
         </div>
      </div>
      <div
         class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 mt-4">
         <h2 class="text-lg font-semibold mb-4 text-neutral-800 dark:text-neutral-100">Jadwal Dokter Hari Ini</h2>
         <table class="w-full text-sm text-left">
            <thead>
               <tr class="border-b border-neutral-200 dark:border-neutral-700">
                  <th class="py-2 px-4">Nama Dokter</th>
                  <th class="py-2 px-4">Spesialis</th>
                  <th class="py-2 px-4">Jam Praktik</th>
               </tr>
            </thead>
            <tbody>
               @forelse($jadwalDokter ?? [] as $dokter)
                  <tr class="border-b border-neutral-100 dark:border-neutral-800">
                     <td class="py-2 px-4">{{ $dokter['nama'] }}</td>
                     <td class="py-2 px-4">{{ $dokter['spesialis'] }}</td>
                     <td class="py-2 px-4">{{ $dokter['jam'] }}</td>
                  </tr>
               @empty
                  <tr>
                     <td colspan="3" class="py-4 text-center text-neutral-500">Tidak ada jadwal dokter hari ini.</td>
                  </tr>
               @endforelse
            </tbody>
         </table>
      </div>
      <div
         class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 mt-4">
         <h2 class="text-lg font-semibold mb-4 text-neutral-800 dark:text-neutral-100">Jadwal Dokter Hari Ini</h2>
         <table class="w-full text-sm text-left">
            <thead>
               <tr class="border-b border-neutral-200 dark:border-neutral-700">
                  <th class="py-2 px-4">Nama Dokter</th>
                  <th class="py-2 px-4">Spesialis</th>
                  <th class="py-2 px-4">Jam Praktik</th>
               </tr>
            </thead>
            <tbody>
               @forelse($jadwalDokter ?? [] as $dokter)
                  <tr class="border-b border-neutral-100 dark:border-neutral-800">
                     <td class="py-2 px-4">{{ $dokter['nama'] }}</td>
                     <td class="py-2 px-4">{{ $dokter['spesialis'] }}</td>
                     <td class="py-2 px-4">{{ $dokter['jam'] }}</td>
                  </tr>
               @empty
                  <tr>
                     <td colspan="3" class="py-4 text-center text-neutral-500">Tidak ada jadwal dokter hari ini.</td>
                  </tr>
               @endforelse
            </tbody>
         </table>
      </div>
      <div
         class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-6 mt-4">
         <h2 class="text-lg font-semibold mb-4 text-neutral-800 dark:text-neutral-100">Jadwal Dokter Hari Ini</h2>
         <table class="w-full text-sm text-left">
            <thead>
               <tr class="border-b border-neutral-200 dark:border-neutral-700">
                  <th class="py-2 px-4">Nama Dokter</th>
                  <th class="py-2 px-4">Spesialis</th>
                  <th class="py-2 px-4">Jam Praktik</th>
               </tr>
            </thead>
            <tbody>
               @forelse($jadwalDokter ?? [] as $dokter)
                  <tr class="border-b border-neutral-100 dark:border-neutral-800">
                     <td class="py-2 px-4">{{ $dokter['nama'] }}</td>
                     <td class="py-2 px-4">{{ $dokter['spesialis'] }}</td>
                     <td class="py-2 px-4">{{ $dokter['jam'] }}</td>
                  </tr>
               @empty
                  <tr>
                     <td colspan="3" class="py-4 text-center text-neutral-500">Tidak ada jadwal dokter hari ini.</td>
                  </tr>
               @endforelse
            </tbody>
         </table>
      </div>
   </div> --}}
</x-layouts.app>
