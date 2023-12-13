<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederASN extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("insert into aparat_sipil_negaras (id_pekerjaan, instansi) values ('ABC-1234567', 'Kementerian Dalam Negeri'),
        ('DEF-8901234', 'Kementerian Luar Negeri'),
        ('GHI-5678901', 'Kementerian Pertahanan'),
        ('JKL-2345678', 'Kementerian Hukum dan Hak Asasi Manusia'),
        ('MNO-9012345', 'Kementerian Keuangan'),
        ('PQR-6789012', 'Kementerian Energi dan Sumber Daya Mineral'),
        ('STU-3456789', 'Kementerian Perindustrian'),
        ('VWX-0123456', 'Kementerian Perdagangan'),
        ('YZA-7890123', 'Kementerian Koperasi dan Usaha Kecil dan Menengah'),
        ('BCD-4567890', 'Kementerian Pekerjaan Umum dan Perumahan Rakyat'),
        ('EFG-1234567', 'Kementerian Perhubungan'),
        ('HIJ-8901234', 'Kementerian Kelautan dan Perikanan'),
        ('JKL-5678901', 'Kementerian Lingkungan Hidup dan Kehutanan'),
        ('MNO-2345678', 'Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional'),
        ('PQR-9012345', 'Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi'),
        ('STU-6789012', 'Kementerian Riset dan Teknologi/Badan Riset dan Inovasi Nasional'),
        ('VWX-3456789', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi'),
        ('YZA-0123456', 'Kementerian Kesehatan'),
        ('BCD-7890123', 'Kementerian Ketenagakerjaan'),
        ('EFG-4567890', 'Kementerian Sosial');");
    }
}
