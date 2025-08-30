<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
   @include('partials.head')
</head>

<body class="hs-overlay-body-open hs-overlay-body-open:overflow-hidden h-screen">
   <!-- Sidebar -->
   <div id="hs-sidebar-content-push"
      class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] [--opened:lg] [--auto-close:lg] hs-overlay-open:translate-x-0 lg:hs-overlay-layout-open:translate-x-0 lg:block lg:-translate-x-full lg:end-auto lg:bottom-0 w-64 -translate-x-full transition-all duration-300 transform h-full hidden fixed top-0 start-0 bottom-0 z-60 bg-white border-e border-gray-200 dark:bg-neutral-800 dark:border-neutral-700"
      role="dialog" tabindex="-1" aria-label="Sidebar">
      <div class="relative flex flex-col h-full max-h-full ">
         <!-- Header -->
         <div class=" p-4 flex justify-between items-center gap-x-2">
            <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white "
               href="#" aria-label="Brand">Brand</a>
            <div class="lg:hidden -me-2">
               <!-- Close Button -->
               <button type="button"
                  class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                  data-hs-overlay="#hs-sidebar-content-push">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                     <path d="M18 6 6 18" />
                     <path d="m6 6 12 12" />
                  </svg>
                  <span class="sr-only">Close</span>
               </button>
               <!-- End Close Button -->
            </div>
         </div>
         <!-- End Header -->
         <!-- Body -->
         <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <div class="hs-accordion-group pb-0 px-2  w-full flex flex-col flex-wrap">
               <ul class="space-y-1 hs-accordion-group">
                  <li>
                     <a class=" flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white"
                        href="/dashboard">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                           <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        Dashboard
                     </a>
                  </li>
                  <li>
                     <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        href="/daftar-pasien">
                        <i class="fa-regular fa-file-lines"></i>
                        Registrasi Pasien
                     </a>
                  </li>

                  <li class="hs-accordion" id="users-accordion">
                     <button type="button"
                        class=" hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        aria-expanded="true" aria-controls="users-accordion-collapse-1">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                           <circle cx="9" cy="7" r="4" />
                           <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                           <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        Users

                        <svg
                           class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 "
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                           stroke-linejoin="round">
                           <path d="m18 15-6-6-6 6" />
                        </svg>

                        <svg
                           class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 "
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                           stroke-linejoin="round">
                           <path d="m6 9 6 6 6-6" />
                        </svg>
                     </button>

                     <div id="users-accordion-collapse-1"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                        role="region" aria-labelledby="users-accordion">
                        <ul class="hs-accordion-group pt-1 ps-7 space-y-1">
                           <li class="hs-accordion" id="users-accordion-sub-1">
                              <button type="button"
                                 class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 aria-expanded="true" aria-controls="users-accordion-sub-1-collapse-1">
                                 Sub Menu 1

                                 <svg
                                    class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                 </svg>

                                 <svg
                                    class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                 </svg>
                              </button>

                              <div id="users-accordion-sub-1-collapse-1"
                                 class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                 role="region" aria-labelledby="users-accordion-sub-1">
                                 <ul class="pt-1 ps-2 space-y-1">
                                    <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                          href="#">
                                          Link 1
                                       </a>
                                    </li>
                                    <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                          href="#">
                                          Link 2
                                       </a>
                                    </li>
                                    <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                          href="#">
                                          Link 3
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </li>

                           <li class="hs-accordion" id="users-accordion-sub-2">
                              <button type="button"
                                 class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 aria-expanded="true" aria-controls="users-accordion-sub-2-collapse-1">
                                 Sub Menu 2

                                 <svg
                                    class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                 </svg>

                                 <svg
                                    class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                 </svg>
                              </button>

                              <div id="users-accordion-sub-2-collapse-1"
                                 class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                 role="region" aria-labelledby="users-accordion-sub-2">
                                 <ul class="pt-1 ps-2 space-y-1">
                                    <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                          href="#">
                                          Link 1
                                       </a>
                                    </li>
                                    <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                          href="#">
                                          Link 2
                                       </a>
                                    </li>
                                    <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                          href="#">
                                          Link 3
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </li>

                  <li class="hs-accordion" id="account-accordion">
                     <button type="button"
                        class=" hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        aria-expanded="true" aria-controls="account-accordion-sub-1-collapse-1">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <circle cx="18" cy="15" r="3" />
                           <circle cx="9" cy="7" r="4" />
                           <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                           <path d="m21.7 16.4-.9-.3" />
                           <path d="m15.2 13.9-.9-.3" />
                           <path d="m16.6 18.7.3-.9" />
                           <path d="m19.1 12.2.3-.9" />
                           <path d="m19.6 18.7-.4-1" />
                           <path d="m16.8 12.3-.4-1" />
                           <path d="m14.3 16.6 1-.4" />
                           <path d="m20.7 13.8 1-.4" />
                        </svg>
                        Kepegawaian

                        <svg
                           class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 "
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                           stroke-linejoin="round">
                           <path d="m18 15-6-6-6 6" />
                        </svg>

                        <svg
                           class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 "
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                           stroke-linejoin="round">
                           <path d="m6 9 6 6 6-6" />
                        </svg>
                     </button>

                     <div id="account-accordion-sub-1-collapse-1"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                        role="region" aria-labelledby="account-accordion">
                        <ul class="pt-1 ps-7 space-y-1">
                           <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 href="#">
                                 Daftar Pengguna
                              </a>
                           </li>
                           <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 href="#">
                                 Pegawai
                              </a>
                           </li>
                           <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 href="#">
                                 Link 3
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>

                  <li class="hs-accordion" id="projects-accordion">
                     <button type="button"
                        class=" hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        aria-expanded="true" aria-controls="projects-accordion-sub-1-collapse-1">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <path
                              d="M15.5 2H8.6c-.4 0-.8.2-1.1.5-.3.3-.5.7-.5 1.1v12.8c0 .4.2.8.5 1.1.3.3.7.5 1.1.5h9.8c.4 0 .8-.2 1.1-.5.3-.3.5-.7.5-1.1V6.5L15.5 2z" />
                           <path d="M3 7.6v12.8c0 .4.2.8.5 1.1.3.3.7.5 1.1.5h9.8" />
                           <path d="M15 2v5h5" />
                        </svg>
                        Rekam Medis

                        <svg
                           class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 "
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                           stroke-linejoin="round">
                           <path d="m18 15-6-6-6 6" />
                        </svg>

                        <svg
                           class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 "
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                           stroke-linejoin="round">
                           <path d="m6 9 6 6 6-6" />
                        </svg>
                     </button>

                     <div id="projects-accordion-sub-1-collapse-1"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                        role="region" aria-labelledby="projects-accordion">
                        <ul class="pt-1 ps-7 space-y-1">
                           <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 href="/rekam-medis/pasien">
                                 Pasien
                              </a>
                           </li>
                           <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 href="#">
                                 Link 2
                              </a>
                           </li>
                           <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                 href="#">
                                 Link 3
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>

                  <li>
                     <a class=" w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                           <line x1="16" x2="16" y1="2" y2="6" />
                           <line x1="8" x2="8" y1="2" y2="6" />
                           <line x1="3" x2="21" y1="10" y2="10" />
                           <path d="M8 14h.01" />
                           <path d="M12 14h.01" />
                           <path d="M16 14h.01" />
                           <path d="M8 18h.01" />
                           <path d="M12 18h.01" />
                           <path d="M16 18h.01" />
                        </svg>
                        Calendar <span
                           class="ms-auto py-0.5 px-1.5 inline-flex items-center gap-x-1.5 text-xs bg-gray-200 text-gray-800 rounded-full dark:bg-neutral-600 dark:text-neutral-200">New</span>
                     </a>
                  </li>
                  <li>
                     <a class=" w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                           <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                        Documentation
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <!-- End Body -->
      </div>
   </div>
   <!-- End Sidebar -->

   <!-- Content -->
   <div class="lg:hs-overlay-layout-open:ms-64 bg-slate-100 transition-all duration-300 dark:bg-neutral-800">
      {{-- <header class="flex flex-wrap h-14 sm:justify-start sm:flex-nowrap bg-white text-sm dark:bg-neutral-800"> --}}
      <header
         class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 w-full bg-white border-b border-gray-200 text-sm h-14 dark:bg-neutral-800 dark:border-neutral-700">
         <nav class="mx-auto px-2 flex flex-wrap basis-full items-center justify-between">
            <!-- Navigation Toggle -->
            <div class=" p-2">
               <button type="button"
                  class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                  aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-content-push"
                  aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-content-push">
                  <svg class="sm:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                     <rect width="18" height="18" x="3" y="3" rx="2" />
                     <path d="M15 3v18" />
                     <path d="m8 9 3 3-3 3" />
                  </svg>
                  <svg class="hidden sm:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                     <rect width="18" height="18" x="3" y="3" rx="2" />
                     <path d="M15 3v18" />
                     <path d="m10 15-3-3 3-3" />
                  </svg>
                  <span class="sr-only">Navigation Toggle</span>
               </button>
            </div>
            <!-- End Navigation Toggle -->
            {{-- <a class="sm:order-1 flex-none text-xl font-semibold dark:text-white focus:outline-hidden focus:opacity-80"
               href="#">Brand</a> --}}
            <div class="sm:order-3 flex items-center gap-x-2">
               <button type="button"
                  class="sm:hidden hs-collapse-toggle relative size-9 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                  id="hs-navbar-alignment-collapse" aria-expanded="false" aria-controls="hs-navbar-alignment"
                  aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-alignment">
                  <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <line x1="3" x2="21" y1="6" y2="6" />
                     <line x1="3" x2="21" y1="12" y2="12" />
                     <line x1="3" x2="21" y1="18" y2="18" />
                  </svg>
                  <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M18 6 6 18" />
                     <path d="m6 6 12 12" />
                  </svg>
                  <span class="sr-only">Toggle</span>
               </button>
               <button type="button"
                  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                  Button
               </button>
            </div>
            <div id="hs-navbar-alignment"
               class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2"
               aria-labelledby="hs-navbar-alignment-collapse">
               <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                  <a class="font-medium text-blue-500 focus:outline-hidden" href="#"
                     aria-current="page">Landing</a>
                  <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                     href="#">Account</a>
                  <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                     href="#">Work</a>
                  <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                     href="#">Blog</a>
               </div>
            </div>
         </nav>
      </header>
      {{-- <div class="relative flex flex-col h-full max-h-full">
      </div> --}}
      {{-- <div
         class="h-screen top-14 p-4 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"> --}}
      <div
         class="px-3 max-h-screen overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
         {{ $slot }}
      </div>
   </div>
   <!-- End Content -->
   @fluxScripts
</body>

</html>
