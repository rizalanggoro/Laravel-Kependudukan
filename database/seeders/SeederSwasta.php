<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederSwasta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO swastas (id_pekerjaan, nama_perusahaan) VALUES
        ('HIJ-1234567', 'PT Astra International Tbk'),
        ('JKL-8901234', 'PT Telkom Indonesia Tbk'),
        ('MNO-5678901', 'PT Bank Central Asia Tbk (BCA)'),
        ('PQR-2345678', 'PT Unilever Indonesia Tbk'),
        ('STU-9012345', 'PT Indofood Sukses Makmur Tbk'),
        ('VWX-6789012', 'PT Bank Mandiri (Persero) Tbk'),
        ('YZA-3456789', 'PT Adaro Energy Tbk'),
        ('BCD-0123456', 'PT HM Sampoerna Tbk'),
        ('EFG-7890123', 'PT Bank Negara Indonesia (Persero) Tbk (BNI)'),
        ('HIJ-4567890', 'PT Bank Danamon Indonesia Tbk'),
        ('JKL-1234567', 'PT Kalbe Farma Tbk'),
        ('MNO-8901234', 'PT XL Axiata Tbk'),
        ('PQR-5678901', 'PT Indocement Tunggal Prakarsa Tbk'),
        ('STU-2345678', 'PT Charoen Pokphand Indonesia Tbk'),
        ('VWX-9012345', 'PT Bank CIMB Niaga Tbk'),
        ('YZA-6789012', 'PT Bank Rakyat Indonesia (Persero) Tbk (BRI)'),
        ('BCD-3456789', 'PT Gudang Garam Tbk'),
        ('EFG-0123456', 'PT Adhi Karya (Persero) Tbk'),
        ('HIJ-7890123', 'PT Semen Indonesia (Persero) Tbk'),
        ('JKL-4567890', 'PT Wijaya Karya (Persero) Tbk');");
    }
}
