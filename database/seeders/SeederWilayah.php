<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederWilayah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("insert into wilayahs (kode_provinsi, nama_provinsi) values ('31', 'DKI Jakarta'),
        ('32', 'Jawa Barat'),
        ('35', 'Jawa Timur'),
        ('34', 'DI Yogyakarta'),
        ('33', 'Jawa Tengah'),
        ('51', 'Bali'),
        ('36', 'Banten'),
        ('16', 'Sumatera Selatan'),
        ('71', 'Sulawesi Utara'),
        ('12', 'Sumatera Utara'),
        ('61', 'Kalimantan Barat'),
        ('21', 'Kepulauan Riau'),
        ('64', 'Kalimantan Timur'),
        ('14', 'Riau'),
        ('13', 'Sumatera Barat'),
        ('63', 'Kalimantan Selatan'),
        ('81', 'Maluku'),
        ('52', 'Nusa Tenggara Barat'),
        ('72', 'Sulawesi Tengah'),
        ('15', 'Jambi'),
        ('92', 'Papua Barat'),
        ('62', 'Kalimantan Tengah'),
        ('18', 'Lampung'),
        ('19', 'Kepulauan Bangka Belitung'),
        ('17', 'Bengkulu'),
        ('11', 'Aceh'),
        ('75', 'Gorontalo'),
        ('53', 'Nusa Tenggara Timur'),
        ('76', 'Sulawesi Barat'),
        ('74', 'Sulawesi Tenggara'),
        ('82', 'Maluku Utara'),
        ('73', 'Sulawesi Selatan');");
    }
}
