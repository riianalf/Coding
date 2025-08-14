<header class="flex items-center h-16 px-4 border-b border-zinc-100 bg-white w-full sticky top-0 z-30">
   <button class="lg:hidden p-2 rounded hover:bg-zinc-100 transition mr-2"
      @click="window.dispatchEvent(new CustomEvent('sidebar-toggle'))">
      <i class='bx bx-menu text-2xl'></i>
   </button>
   <div class="flex-1 flex items-center justify-center">
      <span class="font-bold text-lg tracking-tight text-zinc-800">Gemini</span>
   </div>
   <div class="flex items-center gap-2">
      <span
         class="flex h-9 w-9 items-center justify-center rounded-full bg-zinc-200 text-zinc-700 font-bold text-lg">{{ auth()->user()->initials() }}</span>
   </div>
</header>
<main>
   {{ $slot }}
</main>

@fluxScripts
</body>

</html>
