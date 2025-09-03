<x-layouts.app :title="'Edit Pasien'">
   <div class="p-4">
      <h1 class="text-xl font-semibold mb-4">Edit Pasien</h1>
      <form method="POST" action="{{ route('patients.update', $patient) }}">
         @csrf
         @method('PUT')
         <div class="grid grid-cols-2 gap-4">
            <input type="text" name="nik" value="{{ $patient->nik }}" placeholder="NIK" class="border p-2">
            <input type="text" name="full_name" value="{{ $patient->full_name }}" placeholder="Nama Lengkap"
               class="border p-2">
            <input id="input-desa" type="text" name="desa" value="{{ $patient->desa }}" placeholder="Desa"
               class="border p-2">
            <input id="input-kecamatan" type="text" name="kecamatan" value="{{ $patient->kecamatan }}"
               placeholder="Kecamatan" class="border p-2">
            <input id="input-kabupaten" type="text" name="kabupaten" value="{{ $patient->kabupaten }}"
               placeholder="Kabupaten" class="border p-2">
            <input id="input-provinsi" type="text" name="provinsi" value="{{ $patient->provinsi }}"
               placeholder="Provinsi" class="border p-2">
            <input type="text" name="phone" value="{{ $patient->phone }}" placeholder="Phone" class="border p-2">
            <input type="email" name="email" value="{{ $patient->email }}" placeholder="Email" class="border p-2">
         </div>
         <div class="mt-4">
            <button class="py-2 px-4 bg-blue-600 text-white rounded">Update</button>
         </div>
      </form>
   </div>
</x-layouts.app>
