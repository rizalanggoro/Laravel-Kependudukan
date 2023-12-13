<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederPekerjaan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO pekerjaans (id_pekerjaan, jenis_pekerjaan, gaji, tahun_mulai) VALUES 
        ('ABC-1234567', 'Guru', 7500000, 2004),
        ('DEF-8901234', 'Penyiar Radio', 5200000, 1996),
        ('GHI-5678901', 'Ahli Teknologi Informasi', 9800000, 2010),
        ('JKL-2345678', 'Penyanyi', 4600000, 2005),
        ('MNO-9012345', 'Pemilik Bengkel', 12000000, 2017),
        ('PQR-6789012', 'Desainer Grafis', 3500000, 2000),
        ('STU-3456789', 'Tukang Kebun', 6300000, 2014),
        ('VWX-0123456', 'Pelayan Restoran', 5700000, 1991),
        ('YZA-7890123', 'Dokter', 15200000, 1993),
        ('BCD-4567890', 'Pengacara', 8900000, 2009),
        ('EFG-1234567', 'Pilot', 11500000, 1995),
        ('HIJ-8901234', 'Petani', 6800000, 2007),
        ('JKL-5678901', 'Akuntan', 5700000, 2022),
        ('MNO-2345678', 'Pramugari', 9300000, 2013),
        ('PQR-9012345', 'Programmer', 15800000, 2004),
        ('STU-6789012', 'Barista', 13200000, 2007),
        ('VWX-3456789', 'Fotografer', 7200000, 1993),
        ('YZA-0123456', 'Pengusaha', 15800000, 2016),
        ('BCD-7890123', 'Koki', 10000000, 2015),
        ('EFG-4567890', 'Polisi', 14000000, 1995),
        ('HIJ-1234567', 'Arsitek', 13300000, 2006),
        ('JKL-8901234', 'Penulis', 8200000, 2013),
        ('MNO-5678901', 'Karyawan Bank', 12500000, 1996),
        ('PQR-2345678', 'Insinyur', 15500000, 2009),
        ('STU-9012345', 'Perawat', 9000000, 2009),
        ('VWX-6789012', 'Seniman', 6800000, 1989),
        ('YZA-3456789', 'Pedagang', 11000000, 2022),
        ('BCD-0123456', 'Pelatih Olahraga', 4300000, 2006),
        ('EFG-7890123', 'Penjaga Keamanan', 7700000, 2016),
        ('HIJ-4567890', 'Teknisi Komputer', 13500000, 2000),
        ('JKL-1234567', 'Penari', 8500000, 2008),
        ('MNO-8901234', 'Petugas Penyelamat', 6500000, 2004),
        ('PQR-5678901', 'Editor', 8500000, 1999),
        ('STU-2345678', 'Peneliti', 11800000, 2012),
        ('VWX-9012345', 'Pemadam Kebakaran', 8500000, 2023),
        ('YZA-6789012', 'Sopir Taksi', 3500000, 2005),
        ('BCD-3456789', 'Penjahit', 9600000, 2015),
        ('EFG-0123456', 'Karyawan Hotel', 7000000, 1993),
        ('HIJ-7890123', 'Penari Balet', 8900000, 2019),
        ('JKL-4567890', 'Konsultan Bisnis', 15000000, 2014);");
    }
}
