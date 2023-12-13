<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Penduduk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SeederASN::class,
            SeederCatatanKhusus::class,
            SeederDisabilitas::class,
            SeederEmigrasi::class,
            SeederImigrasi::class,
            SeederKelahiran::class,
            SeederKeluarga::class,
            SeederKematian::class,
            SeederKewarganegaraan::class,
            SeederLaporanSensus::class,
            SeederMobilitas::class,
            SeederPekerjaan::class,
            SeederPenduduk::class,
            SeederSwasta::class,
            SeederTransmigrasi::class,
            SeederWilayah::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::statement("insert into penduduk (nik, nama, tanggal_lahir, jenis_kelamin, status_nikah, pendidikan_terakhir, no_hp, status_kewarganegaraan, no_kk, kode_provinsi) values ('3174050512830001', 'Ananda Putra Pratama', '1983-02-13', 'Laki-Laki', 'Kawin', 'Sarjana 1', '081278945612', 'WNI', '1902051208940015', '19')");
    }
}
