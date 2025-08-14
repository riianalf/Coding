<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
   @include('partials.head')
</head>

<body>
   <!-- Sidebar -->
   <div id="hs-sidebar-content-push-to-mini-sidebar"
      class="hs-overlay [--auto-close:lg] hs-overlay-minified:w-13 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-64
hs-overlay-open:translate-x-0
-translate-x-full transition-all duration-300 transform
h-full
hidden
overflow-x-hidden
fixed top-0 start-0 bottom-0 z-60
bg-white border-e border-gray-200 dark:bg-neutral-800 dark:border-neutral-700"
      role="dialog" tabindex="-1" aria-label="Sidebar">
      <div class="relative flex flex-col h-full max-h-full ">
         <!-- Header -->
         <header class="py-2 px-2 h-16 mb-2 flex justify-between items-center gap-x-2">

            <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white hs-overlay-minified:hidden"
               href="#" aria-label="Brand">Brand</a>

            <div class="lg:hidden">
               <!-- Close Button -->
               <button type="button"
                  class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                  data-hs-overlay="#hs-sidebar-content-push-to-mini-sidebar">
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
            <div class="hidden lg:block">
               <!-- Toggle Button -->
               <button type="button"
                  class="flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                  aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-content-push-to-mini-sidebar"
                  aria-label="Minify navigation" data-hs-overlay-minifier="#hs-sidebar-content-push-to-mini-sidebar">
                  <svg class="hidden hs-overlay-minified:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <rect width="18" height="18" x="3" y="3" rx="2" />
                     <path d="M15 3v18" />
                     <path d="m8 9 3 3-3 3" />
                  </svg>
                  <svg class="hs-overlay-minified:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <rect width="18" height="18" x="3" y="3" rx="2" />
                     <path d="M15 3v18" />
                     <path d="m10 15-3-3 3-3" />
                  </svg>
                  <span class="sr-only">Navigation Toggle</span>
               </button>
               <!-- End Toggle Button -->
            </div>
         </header>
         <!-- End Header -->

         <!-- Body -->
         <nav
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <div class=" pb-0 px-2  w-full flex flex-col flex-wrap">
               <ul class="space-y-1">
                  <li>
                     <a class="min-h-[36px] flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white"
                        href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                           <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        <span class="hs-overlay-minified:hidden">Dashboard</span>
                     </a>
                  </li>

                  <li>
                     <a class="min-h-[36px] w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        href="/daftar-pasien">
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
                        <span class="text-nowrap hs-overlay-minified:hidden">Registrasi <span
                              class="ms-auto py-0.5 px-1.5 inline-flex items-center gap-x-1.5 text-xs bg-gray-200 text-gray-800 rounded-full dark:bg-neutral-600 dark:text-neutral-200">New</span></span>
                     </a>
                  </li>
                  <li>
                     <a class="min-h-[36px] w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                        href="#">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round">
                           <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                           <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                        <span class="hs-overlay-minified:hidden">Documentation</span>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- End Body -->
      </div>
   </div>
   <!-- End Sidebar -->
   <div
      class="flex flex-1 flex-col lg:ms-[256px] lg:hs-overlay-minified:ms-13 w-calc(100% - 16rem) h-screen overflow-hidden">
      <header
         class="[grid-area:main] flex top-0 h-14 sm:justify-start sm:flex-nowrap text-sm py-2 dark:bg-neutral-800 border-b border-gray-200 dark:border-neutral-700">
         <nav
            class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between lg:justify-end">
            <!-- Navigation Toggle -->
            <div class="lg:hidden">
               {{-- <button type="button"
                  class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-start bg-gray-800 border border-gray-800 text-white text-sm font-medium rounded-lg shadow-2xs align-middle hover:bg-gray-950 focus:outline-hidden focus:bg-gray-900 dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200"
                  aria-haspopup="dialog" aria-expanded="false"
                  aria-controls="hs-sidebar-content-push-to-mini-sidebar" aria-label="Toggle navigation"
                  data-hs-overlay="#hs-sidebar-content-push-to-mini-sidebar">
                  Open
               </button> --}}
               <button type="button"
                  class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                  aria-haspopup="dialog" aria-expanded="false"
                  aria-controls="hs-sidebar-content-push-to-mini-sidebar" aria-label="Toggle navigation"
                  data-hs-overlay="#hs-sidebar-content-push-to-mini-sidebar">
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

               <div class="hs-dropdown relative inline-flex">
                  <button id="hs-dropdown-custom-trigger" type="button"
                     class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                     aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     <img class="w-8 h-auto rounded-full"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                        alt="Avatar">
                     <span class="text-gray-600 font-medium truncate max-w-30 dark:text-neutral-400">Maria</span>
                     <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                     </svg>
                  </button>

                  <div
                     class="hs-dropdown-menu absolute transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 z-[9999]"
                     role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">
                     <div class="p-1 space-y-0.5">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                           href="#">
                           Newsletter
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                           href="#">
                           Purchases
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                           href="#">
                           Downloads
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                           href="#">
                           Team Account
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            {{-- <div id="hs-navbar-alignment"
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
            </div> --}}
         </nav>
      </header>

      <div class="flex-1 relative overflow-y-auto p-2 bg-gray-100 dark:bg-neutral-900">
         {{ $slot }}
      </div>
   </div>


   @fluxScripts
</body>

</html>
