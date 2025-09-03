<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        $genders = ['male', 'female'];
        $gender = $this->faker->randomElement($genders);

        // try to load small sample of areas if available
        $areas = [];
        $jsonPath = base_path('public/data/indonesia-areas.json');
        if (file_exists($jsonPath)) {
            $content = file_get_contents($jsonPath);
            $areas = json_decode($content, true) ?: [];
        }

        $area = [];
        if (!empty($areas)) {
            $area = $this->faker->randomElement($areas);
        }

        return [
            'nik' => $this->faker->unique()->numerify('###############'),
            'full_name' => $this->faker->name($gender === 'male' ? 'male' : 'female'),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date('Y-m-d', '-18 years'),
            'gender' => $gender,
            'desa' => $area['desa'] ?? $this->faker->streetName(),
            'kecamatan' => $area['kecamatan'] ?? $this->faker->citySuffix(),
            'kabupaten' => $area['kabupaten'] ?? $this->faker->city(),
            'provinsi' => $area['provinsi'] ?? $this->faker->state(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'bpjs_number' => $this->faker->optional(0.6)->numerify('##############'),
            'bpjs_active' => $this->faker->boolean(60),
            'blood_type' => $this->faker->optional(0.5)->randomElement(['A', 'B', 'AB', 'O']),
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced', 'widowed']),
            'religion' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'occupation' => $this->faker->jobTitle(),
            'nationality' => 'WNI',
            'emergency_contact_name' => $this->faker->name(),
            'emergency_contact_relationship' => $this->faker->randomElement(['Istri', 'Suami', 'Anak', 'Saudara', 'Orang Tua', 'Teman']),
            'emergency_contact_phone' => $this->faker->phoneNumber(),
            'medical_history' => $this->faker->optional(0.4)->sentence(),
            'allergies' => $this->faker->optional(0.3)->word(),
        ];
    }
}
