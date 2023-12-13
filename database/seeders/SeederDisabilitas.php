<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederDisabilitas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO disabilitas (jenis_disabilitas, status_disabilitas, informasi_medis) VALUES
        ('Disabilitas fisik', 'Sementara', 'Patah tulang'),
        ('Gangguan penglihatan', 'Permanen', 'Buta'),
        ('Gangguan Pendengaran', 'Permanen', 'Tuli'),
        ('Disabilitas mental atau psikologis', 'Sementara', 'Bipolar'),
        ('Gangguan perkembangan', 'Permanen', 'Autisme'),
        ('Disabilitas intelektual', 'Permanen', 'Down sindrom'),
        ('Gangguan kesehatan mental serius', 'Sementara', 'Skizofrenia'),
        ('Disabilitas sensorik', 'Permanen', 'Buta warna'),
        ('Gangguan pembelajaran', 'Permanen', 'Gangguan Perhatian dan Hiperaktivitas (ADHD)'),
        ('Disabilitas Kronis', 'Permanen', 'Penyakit jantung');");
    }
}
