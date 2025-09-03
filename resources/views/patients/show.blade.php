<x-layouts.app :title="'Detail Pasien'">
   <div class="p-4">
      <h1 class="text-xl font-semibold">{{ $patient->full_name }}</h1>
      <div class="mt-2">
         <p><strong>NIK:</strong> {{ $patient->nik }}</p>
         <p><strong>Email:</strong> {{ $patient->email }}</p>
         <p><strong>BPJS:</strong> {{ $patient->bpjs_number ?? '-' }}</p>
         <p><strong>Alamat:</strong> {{ $patient->desa }}, {{ $patient->kecamatan }}, {{ $patient->kabupaten }}
            ({{ $patient->provinsi }})</p>
      </div>
      <div class="mt-4">
         <a href="{{ route('patients.edit', $patient) }}" class="btn btn-primary">Edit</a>
      </div>
   </div>
</x-layouts.app>
