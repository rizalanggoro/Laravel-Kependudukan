<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederImigrasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("insert into imigrasis (id_mobilitas, negara_asal) values ('OPQRSTU2345', 'Jepang'), ('6VWXYZ7890A', 'Taiwan'), 
        ('BCD23EFGHIJ', 'Singapura'), 
        ('KLMNOPQRSTU', 'Filipina'), 
        ('456789VWXYZ', 'Amerika Serikat'), 
        ('01AB2C3D4EF', 'Pakistan'), 
        ('GHIJKL5678M', 'Bangladesh'), 
        ('NOPQRSTU9VW', 'Vietnam'), 
        ('XYZ0123456A', 'Sri Lanka'), 
        ('BC789DEFGHI', 'Thailand'), 
        ('JK2345LMNOP', 'Uni Emirat Arab'), 
        ('QRSTU67VWXY', 'Belanda'), 
        ('890ABCDEF12', 'Rusia'), 
        ('GHIJKL3456M', 'Brasil');");
    }
}
