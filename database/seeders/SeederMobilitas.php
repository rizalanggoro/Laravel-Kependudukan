<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederMobilitas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO mobilitas (id_mobilitas, tanggal_perpindahan) VALUES
        ('1T3G4R5678', '2008-01-22'),
        ('8769K0BCDE', '2000-05-20'),
        ('6789KLMNOP', '2011-06-14'),
        ('QR678S9TUV', '2023-12-20'),
        ('5678WXY9Z0', '2020-10-15'),
        ('12ABCD3456', '2018-12-15'),
        ('E7FGH89IJK', '2010-11-20'),
        ('3456UVW7XY', '2010-11-20'),
        ('Z89ABCDE01', '1999-03-20'),
        ('FG23HIJKL4', '2001-03-26'),
        ('M5N678OPQR', '2011-11-11'),
        ('ST9UVWXYZ0', '2015-12-10'),
        ('3456AB78CD', '1999-01-27'),
        ('E9FGHIJKL0', '2010-11-14'),
        ('MNOPQ5678R', '2000-12-22'),
        ('STU9VWXYZ01', '2001-02-28'),
        ('23ABC45DEF', '2001-02-28'),
        ('GHIJK6789L', '2004-11-12'),
        ('MNO1PQR2ST', '1965-09-30'),
        ('OPQRSTU2345', '2002-04-18'),
        ('6VWXYZ7890A', '1998-05-20'),
        ('BCD23EFGHIJ', '2001-11-25'),
        ('KLMNOPQRSTU', '2017-04-04'),
        ('456789VWXYZ', '2015-12-03'),
        ('01AB2C3D4EF', '2010-10-10'),
        ('GHIJKL5678M', '2023-01-27'),
        ('NOPQRSTU9VW', '2022-04-12'),
        ('XYZ0123456A', '2011-04-24'),
        ('BC789DEFGHI', '2019-09-23'),
        ('JK2345LMNOP', '2018-10-20'),
        ('QRSTU67VWXY', '2009-12-20'),
        ('890ABCDEF12', '2018-10-20'),
        ('GHIJKL3456M', '2023-03-26'),
        ('STU234VWXYZ56', '2010-12-28'),
        ('7890ABCDE1FG', '2000-12-11'),
        ('HIJKLMN2OPQR', '1977-11-24'),
        ('STUVWXYZ34567', '1994-10-22');");
    }
}
