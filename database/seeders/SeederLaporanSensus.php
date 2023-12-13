<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederLaporanSensus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO laporan_sensuses (no_seri, metode_sensus, tanggal_sensus, nama_petugas) VALUES
        ('NS1990-023-AB', 'De facto', NULL, 'Budi Pratama'),
        ('NS1997-020-BC', 'De jure', '2000-05-12', 'Siti Rahayu'),
        ('NS2000-013-DE', 'De jure', '2015-10-18', 'Agus Santoso'),
        ('NS1998-023-FG', 'De jure', '1992-03-22', 'Dewi Wulandari'),
        ('NS2005-010-HI', 'De facto', '2010-11-08', 'Hadi Nugroho'),
        ('NS2002-002-JK', 'De jure', '1975-03-06', 'Ratna Susanti'),
        ('NS2009-001-LM', 'De facto', '2008-04-19', 'Joko Sasworno'),
        ('NS2010-012-NO', 'De jure', '2022-09-27', 'Rini Setiawan'),
        ('NS2005-002-PQ', 'De jure', '2017-01-21', 'Adi Kusuma'),
        ('NS2011-009-RS', 'De jure', '1991-04-26', 'Maya Dewi'),
        ('NS2019-002-UV', 'De facto', '2023-12-03', 'Dwi Santoso'),
        ('NS2017-014-WX', 'De jure', '2006-04-09', 'Nia Fitriani'),
        ('NS1993-020-YZ', 'De facto', '2014-07-23', 'Eko Prasetyo'),
        ('NS2021-011-12', 'De jure', '1999-06-18', 'Retno Purnama'),
        ('NS2020-020-34', 'De jure', '2015-08-28', 'Irfan Saputra'),
        ('NS2016-008-56', 'De jure', '1992-06-07', 'Siska Utami'),
        ('NS2001-004-78', 'De facto', '2010-09-19', 'Arif Setiawan'),
        ('NS2015-006-90', 'De jure', '2003-02-06', 'Lina Permata'),
        ('NS2014-001-AB', 'De facto', '2019-01-27', 'Fajar Wijaya'),
        ('NS2016-028-CD', 'De jure', '1997-08-11', 'Rani Indah');");
    }
}
