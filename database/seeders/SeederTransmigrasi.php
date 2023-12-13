<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTransmigrasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement("insert into transmigrasis (id_mobilitas, daerah_asal, daerah_tujuan) values ('1T3G4R5678', 'Belitung Timur', 'Jakarta Pusat'), ('8769K0BCDE', 'Gorontalo', 'Surabaya'),
        ('6789KLMNOP', 'Nias Selatan', 'Bogor'),
        ('QR678S9TUV', 'Landak', 'Medan'),
        ('5678WXY9Z0', 'Empat Lawang', 'Tangerang'),
        ('12ABCD3456', 'Manggarai Barat', 'Jakarta Timur'),
        ('E7FGH89IJK', 'Labuhan Batu', 'Depok'),
        ('3456UVW7XY', 'North Halmahera', 'Semarang'),
        ('Z89ABCDE01', 'Bolaang Mongondow Utara', 'Palembang'),
        ('FG23HIJKL4', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', 'Makassar'),
        ('M5N678OPQR', 'Kepulauan Sangihe', 'Jakarta Selatan'),
        ('ST9UVWXYZ0', 'Konawe', 'Bekasi Selatan'),
        ('3456AB78CD', 'Maluku Tenggara Barat', 'Jakarta Barat'),
        ('E9FGHIJKL0', 'Buton', 'Malang'),
        ('MNOPQ5678R', 'Teluk Bintuni', 'Tangerang Selatan'),
        ('STU9VWXYZ01', 'Tambrauw', 'Padang'),
        ('23ABC45DEF', 'Rote Ndao', 'Bandung Barat'),
        ('GHIJK6789L', 'Merauke', 'Surakarta (Solo)');");
    }
}
