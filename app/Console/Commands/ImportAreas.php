<?php

namespace App\Console\Commands;

use App\Models\Area;
use Illuminate\Console\Command;

class ImportAreas extends Command
{
    protected $signature = 'areas:import {path=indonesia-areas.json}';
    protected $description = 'Import areas JSON into areas table';

    public function handle()
    {
        $path = storage_path('app/' . $this->argument('path'));
        if (!file_exists($path)) {
            $this->error("File not found: {$path}");
            return 1;
        }

        $content = file_get_contents($path);
        $data = json_decode($content, true);
        if (!is_array($data)) {
            $this->error('Invalid JSON');
            return 1;
        }

        $bar = $this->output->createProgressBar(count($data));
        $bar->start();

        foreach ($data as $row) {
            Area::create([
                'desa' => $row['desa'] ?? $row['name'] ?? null,
                'kecamatan' => $row['kecamatan'] ?? $row['subdistrict'] ?? null,
                'kabupaten' => $row['kabupaten'] ?? $row['city'] ?? null,
                'provinsi' => $row['provinsi'] ?? $row['province'] ?? null,
                'kode' => $row['kode'] ?? null,
            ]);
            $bar->advance();
        }

        $bar->finish();
        $this->info('\nImported ' . count($data) . ' areas.');
        return 0;
    }
}
