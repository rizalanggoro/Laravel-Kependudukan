<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederKematian extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO kematians (nik, id, tanggal_kematian, sebab_kematian) VALUES
        ('5308101808620001', '5308-KM-16082007-0001', '2007-08-15', 'Penyakit Jantung Koroner'),
        ('1902057004570004', '1902-KM-03042006-0010', '2006-04-02', 'Stroke'),
        ('7407084402560004', '7407-KM-10062008-0005', '2008-12-21', 'Kanker Paru-paru'),
        ('3310152310610002', '3310-KM-10062009-0007', '2009-06-10', 'Penyakit Paru Obstruktif Kronis (PPOK)'),
        ('8272072107680002', '8272-KM-30032005-0004', '2005-11-04', 'Diabetes Mellitus'),
        ('6403091912530002', '6403-KM-01042008-0011', '2008-03-30', 'Penyakit Ginjal Kronis'),
        ('5314046808600001', '5314-KM-20092010-0012', '2010-09-18', 'Alzheimer'),
        ('1372014908480002', '1372-KM-12072006-0019', '2006-07-12', 'Pneumonia'),
        ('8207016201580002', '8207-KM-10022009-0014', '2009-02-07', 'Infeksi Saluran Pernapasan Atas'),
        ('7313112004520003', '7313-KM-26052007-0017', '2007-05-25', 'Hipertensi'),
        ('5204121506630004', '5204-KM-09102005-0019', '2005-10-09', 'Osteoporosis'),
        ('8271086011620001', '8271-KM-15012008-0020', '2008-01-14', 'Komplikasi Diabetes'),
        ('8271052702510001', '8271-KM-03082009-0002', '2009-08-03', 'Gagal Jantung Kongestif'),
        ('1172011805590005', '1172-KM-20062009-0004', '2006-06-20', 'Demensia Vaskular'),
        ('7102034710560003', '7102-KM-27092010-0016', '2010-09-27', 'Kanker Kolorektal'),
        ('7210143107580004', '7210-KM-05122007-0015', '2007-12-05', 'Kanker Prostat'),
        ('3172046603520003', '3172-KM-08042005-0007', '2005-04-08', 'Kanker Payudara'),
        ('7317221604600003', '7317-KM-12112008-0008', '2008-11-11', 'Gangguan Irama Jantung (Aritmia)'),
        ('5309186111610004', '5309-KM-16022010-0005', '2010-02-16', 'Gangguan Sistem Saraf Pusat'),
        ('5305051409530001', '5305-KM-22102005-0006', '2005-10-22', 'Kondisi Terkait Penuaan');");
    }
}
