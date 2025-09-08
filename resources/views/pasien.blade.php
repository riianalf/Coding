<!-- Table Section -->
<div class="max-w-full p-4 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
        <div
            class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <div class="min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Kelola Pasien
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Pusat pengelolaan data pasien
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    href="{{ route('rekam-medis.pasien') }}">
                                    View all
                                </a>

                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('patients.create') }}">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Add user
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    {{-- <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700"> --}}
                    <!-- Table -->
                    @php
                        // if controller didn't pass $patients, fallback to paginate here
                        $patients = $patients ?? \App\Models\Patient::paginate(15);
                    @endphp

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-800 text-[11px]">
                            <tr>
                                <th class="ps-4 py-3 text-center"><input type="checkbox"
                                        class="shrink-0 border-gray-300 rounded-sm"></th>
                                <th class="ps-6 py-3 text-center"><span class="font-semibold uppercase">Nama</span>
                                </th>
                                <th class="px-6 py-3 text-center"><span class="font-semibold uppercase">NIK</span>
                                </th>
                                <th class="px-6 py-3 text-center"><span class="font-semibold uppercase">ID BPJS</span>
                                </th>
                                <th class="px-6 py-3 text-center"><span class="font-semibold uppercase">Alamat</span>
                                </th>
                                <th class="px-6 py-3 text-center">
                                    <span class="font-semibold uppercase">
                                        Jenis Kelamin
                                    </span>
                                </th>
                                <th class="px-6 py-3 text-center">
                                    <span class="font-semibold uppercase">
                                        Tanggal Lahir / Umur
                                    </span>
                                </th>
                                <th class="px-6 py-3 text-end"><span class="font-semibold uppercase">Aksi</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 text-[11px]">
                            @forelse($patients as $patient)
                                <tr>
                                    <td class="ps-4 py-3">
                                        <input type="checkbox" class="shrink-0 border-gray-300 rounded-sm">
                                    </td>
                                    <td class="ps-6 pe-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <div class="inline-block size-9.5 rounded-full bg-gray-100 text-center">
                                                <span
                                                    class="font-medium text-sm">{{ strtoupper(substr($patient->full_name, 0, 1)) }}</span>
                                            </div>
                                            <div class="grow">
                                                <div class="text-sm font-semibold text-gray-800">
                                                    {{ $patient->full_name }}
                                                </div>
                                                <div class="text-sm text-gray-500">{{ $patient->nik }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">{{ $patient->nik }}</td>
                                    <td class="px-6 py-3">{{ $patient->bpjs_number ?? '-' }}</td>
                                    <td class="px-6 py-3 text-sm text-gray-600">
                                        {{ $patient->desa }}{{ $patient->kecamatan ? ', ' . $patient->kecamatan : '' }}{{ $patient->kabupaten ? ', ' . $patient->kabupaten : '' }}{{ $patient->provinsi ? ' (' . $patient->provinsi . ')' : '' }}
                                    </td>
                                    <td class="px-6 py-3">{{ ucfirst($patient->gender ?? '-') }}</td>
                                    <td class="px-6 py-3">
                                        @if ($patient->birth_date)
                                            {{ $patient->birth_date->format('Y-m-d') }}<br>
                                            <span class="text-xs text-gray-500">{{ $patient->birth_date->age }}
                                                tahun</span>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="px-6 py-3 text-end">
                                        <a href="{{ route('patients.edit', $patient) ?? '#' }}"
                                            class="inline-flex items-center text-sm text-blue-600">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="py-4 text-center text-sm text-gray-500">Tidak ada data
                                        pasien.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Table -->
                    <!-- Footer -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <tr>
      <td class="size-px whitespace-nowrap">
         <div class="ps-6 py-3">
            <label for="hs-at-with-checkboxes-2" class="flex">
               <input type="checkbox"
                  class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  id="hs-at-with-checkboxes-2">
               <span class="sr-only">Checkbox</span>
            </label>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
            <div class="flex items-center gap-x-3">
               <img class="inline-block size-9.5 rounded-full"
                  src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                  alt="Avatar">
               <div class="grow">
                  <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David
                     Harrison</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
               </div>
            </div>
         </div>
      </td>
      <td class="h-px w-72 whitespace-nowrap">
         <div class="px-6 py-3">
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding
               products</span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <span
               class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
               <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
               </svg>
               Warning
            </span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <div class="flex items-center gap-x-3">
               <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
               <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                  <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                     role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                     aria-valuemax="100"></div>
               </div>
            </div>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-1.5">
            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
               href="#">
               Edit
            </a>
         </div>
      </td>
   </tr>

   <tr>
      <td class="size-px whitespace-nowrap">
         <div class="ps-6 py-3">
            <label for="hs-at-with-checkboxes-3" class="flex">
               <input type="checkbox"
                  class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  id="hs-at-with-checkboxes-3">
               <span class="sr-only">Checkbox</span>
            </label>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
            <div class="flex items-center gap-x-3">
               <span
                  class="inline-flex items-center justify-center size-9.5 rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                  <span class="font-medium text-sm text-gray-800 dark:text-neutral-200">A</span>
               </span>
               <div class="grow">
                  <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Anne
                     Richard</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">anne@site.com</span>
               </div>
            </div>
         </div>
      </td>
      <td class="h-px w-72 whitespace-nowrap">
         <div class="px-6 py-3">
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <span
               class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
               <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
               </svg>
               Active
            </span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <div class="flex items-center gap-x-3">
               <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
               <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                  <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                     role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                     aria-valuemax="100"></div>
               </div>
            </div>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-1.5">
            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
               href="#">
               Edit
            </a>
         </div>
      </td>
   </tr>

   <tr>
      <td class="size-px whitespace-nowrap">
         <div class="ps-6 py-3">
            <label for="hs-at-with-checkboxes-4" class="flex">
               <input type="checkbox"
                  class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  id="hs-at-with-checkboxes-4">
               <span class="sr-only">Checkbox</span>
            </label>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
            <div class="flex items-center gap-x-3">
               <img class="inline-block size-9.5 rounded-full"
                  src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                  alt="Avatar">
               <div class="grow">
                  <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Samia
                     Kartoon</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">samia@site.com</span>
               </div>
            </div>
         </div>
      </td>
      <td class="h-px w-72 whitespace-nowrap">
         <div class="px-6 py-3">
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive
               director</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <span
               class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
               <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                     d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
               </svg>
               Active
            </span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <div class="flex items-center gap-x-3">
               <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
               <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                  <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                     role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                  </div>
               </div>
            </div>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-3">
            <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
         </div>
      </td>
      <td class="size-px whitespace-nowrap">
         <div class="px-6 py-1.5">
            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500"
               href="#">
               Edit
            </a>
         </div>
      </td>
   </tr> --}}
<!-- End Table -->



<!-- End Card -->
<!-- End Table Section -->

{{-- <x-layouts.app :title="__('rekam-medis.pasien')">


</x-layouts.app> --}}
