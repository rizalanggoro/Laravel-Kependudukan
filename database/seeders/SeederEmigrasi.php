<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederEmigrasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("insert into emigrasis (id_mobilitas, negara_tujuan) values ('STU234VWXYZ56', 'Saudi Arabia'),
        ('7890ABCDE1FG', 'Afrika Selatan'),
        ('HIJKLMN2OPQR', 'New Zealand'),
        ('STUVWXYZ34567', 'Irlandia');");
    }
}
