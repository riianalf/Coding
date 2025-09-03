<x-layouts.app :title="'Daftar Pasien'">
   <div class="p-4">
      <div class="flex justify-between items-center mb-4">
         <h1 class="text-xl font-semibold">Daftar Pasien</h1>
         <a href="{{ route('patients.create') }}" class="btn btn-primary">Tambah Pasien</a>
      </div>

      @include('pasien')
   </div>
</x-layouts.app>
