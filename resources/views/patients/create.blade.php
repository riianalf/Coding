<x-layouts.app :title="'Tambah Pasien'">
   <div class="p-4">
      <h1 class="text-xl font-semibold mb-4">Tambah Pasien</h1>
      <form method="POST" action="{{ route('patients.store') }}">
         @csrf
         <div class="grid grid-cols-2 gap-4">
            <input type="text" name="nik" placeholder="NIK" class="border p-2">
            <input type="text" name="full_name" placeholder="Nama Lengkap" class="border p-2">
            <input id="input-desa" type="text" name="desa" placeholder="Desa" class="border p-2">
            <input id="input-kecamatan" type="text" name="kecamatan" placeholder="Kecamatan" class="border p-2">
            <input id="input-kabupaten" type="text" name="kabupaten" placeholder="Kabupaten" class="border p-2">
            <input id="input-provinsi" type="text" name="provinsi" placeholder="Provinsi" class="border p-2">
            <input type="text" name="phone" placeholder="Phone" class="border p-2">
            <input type="email" name="email" placeholder="Email" class="border p-2">
         </div>
         <div class="mt-4">
            <button class="py-2 px-4 bg-blue-600 text-white rounded">Simpan</button>
         </div>
      </form>
   </div>
</x-layouts.app>
