<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederPenduduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("insert into penduduks (nik, nama, tanggal_lahir, jenis_kelamin, pendidikan_terakhir, no_hp, status_nikah, status_kewarganegaraan, no_kk, kode_provinsi) values ('3174050512830001', 'Ananda Putra Pratama', '1983-05-12', 'Laki-Laki', 'Kawin', 'Sarjana 1', '081278945612', 'WNI', '1902051208940015', '19'),
       ('3273086309770004', 'Dinda Ayu Wulandari', '1977-09-23', 'Perempuan', 'Sarjana II', '089812365478', 'Belum Kawin', 'WNI', '7501091707000045', '75'),
       ('3573081107920002', 'Farhan Akbar Maulana', '1992-07-11', 'Laki-laki', 'Diploma III', '081398765432', 'Kawin', 'WNI', '1902051208940015', '19'),
       ('3403071402850002', 'Nia Fitriani Sari', '1985-12-14', 'Laki-laki', 'Sarjana I', '089845678901', 'Kawin', 'WNI', '1171051506210069', '11'),
       ('7371153007980003', 'Galih Putra Nugraha', '1998-07-30', 'Laki-laki', 'Sarjana I', '081289012345', 'Kawin', 'WNI', '6171051708120047', '61'),
       ('3322171205800004', 'Fira Rizki Ramadhani', '1980-05-12', 'Laki-laki', 'Diploma IV', '083823456789', 'Kawin', 'WNI', '1671142306000001', '16'),
       ('5171041810950002', 'Adi Kusuma Wardhana', '1995-10-18', 'Laki-laki', 'Tamat SMA/Sederajat', '081356789012', 'Belum Kawin', 'WNA', '3174050402020005', '31'),
       ('3671096203720004', 'Siti Nurul Hidayah', '1972-03-22', 'Perempuan', 'Tamat SMP/Sederajat', '081234567890', 'Kawin', 'WNI', '3273081305950010', '32'),
       ('3573050811900001', 'Irfan Saputra Kusuma', '1990-11-08', 'Laki-laki', 'Diploma IV', '082190123456', 'Kawin', 'WNI', '3578032506040009', '35'),
       ('1671144603750002', 'Maya Rahayu Dewi', '1975-06-03', 'Perempuan', 'Sarjana III', '081387654321', 'Kawin', 'WNI', '3403072805030004', '34'),
       ('7171101904880003', 'Yudi Setiawan Nugroho', '1988-04-19', 'Laki-laki', 'Tamat SMA/Sederajat', '081532109876', 'Kawin', 'WNI', '7371153110200015', '73'),
       ('1271216709020001', 'Nisa Lestari Permata', '2002-09-27', 'Perempuan', 'Tamat SMA/Sederajat', '089854321098', 'Belum Kawin', 'WNI', '3322172504030016', '33'),
       ('3276110708910005', 'Yoga Pramudya Ananta', '1991-07-08', 'Laki-laki', 'Tamat SMP/Sederajat', '083810293847', 'Kawin', 'WNI', '5171041406060023', '51'),
       ('6171055401820003', 'Rani Putri Utami', '1982-01-14', 'Perempuan', 'Diploma III', '081387651234', 'Kawin', 'WNA', '3671091402950013', '36'),
       ('6171050402990003', 'Dimas Aditya Prasetyo', '1999-04-02', 'Laki-laki', 'Sarjana I', '083843219876', 'Belum Kawin', 'WNI', '3573051302120089', '35'),
       ('2171026012870004', 'Dina Puspita Dewi', '1987-12-20', 'Perempuan', 'Sarjana II', '081210987654', 'Kawin', 'WNA', '3276112506190015', '32'),
       ('6471030910740002', 'Agung Santoso Wibowo', '1974-09-10', 'Laki-laki', 'Diploma IV', '081256781234', 'Kawin', 'WNI', '3372042901140046', '33'),
       ('1471026506960002', 'Anisa Fitria Cahyani', '1996-06-25', 'Perempuan', 'Diploma IV', '083889012345', 'Belum Kawin', 'WNI', '2171021602170193', '21'),
       ('1371091603040001', 'Ahmad Rizki Fauzi', '2004-03-16', 'Laki-laki', 'Tamat SMA/Sederajat', '081312348765', 'Belum Kawin', 'WNA', '6471031211020093', '64'),
       ('6371036911760003', 'Lina Amalia Hutomo', '1976-11-29', 'Perempuan', 'Sarjana III', '081287654321', 'Kawin', 'WNI', '1471020208130000', '14'),
       ('8171041003840004', 'Arya Dharma Putra', '1984-10-03', 'Laki-laki', 'Diploma III', '083854321678', 'Kawin', 'WNI', '1371092803010006', '13'),
       ('6472084209930003', 'Dian Purnama Sari', '1993-02-09', 'Perempuan', 'Tamat SMP/Sederajat', '081298765432', 'Belum Kawin', 'WNA', '6371032812030000', '63'),
       ('5271064507730002', 'Fadilah Indah Sari', '1973-05-07', 'Perempuan', 'Tamat SMA/Sederajat', '081376543210', 'Kawin', 'WNI', '6472082305980097', '64'),
       ('3274021508890004', 'Rizky Pratama Saputra', '1989-08-15', 'Laki-laki', 'Sarjana II', '089823456789', 'Kawin', 'WNI', '5271063010060093', '52'),
       ('1375026102970004', 'Widya Cahya Lestari', '1997-01-21', 'Perempuan', 'Diploma III', '089889012345', 'Belum Kawin', 'WNA', '3274021305950010', '32'),
       ('7271032604710003', 'Fandi Arifin Wibowo', '1971-04-26', 'Laki-laki', 'Diploma III', '083856789012', 'Kawin', 'WNI', '1375022506040009', '13'),
       ('3604130312000001', 'Hani Ramadhani Santoso', '2000-03-12', 'Laki-laki', 'Tamat SMA/Sederajat', '081234567890', 'Belum Kawin', 'WNI', '7271032805030004', '72'),
       ('1571100904860002', 'Dito Wahyu Prabowo', '1986-04-09', 'Laki-laki', 'Tamat SMP/Sederajat', '081390123456', 'Kawin', 'WNI', '3604133110200015', '36'),
       ('3278076307940001', 'Laila Tri Utami', '1994-07-23', 'Perempuan', 'Sarjana II', '081387654321', 'Kawin', 'WNI', '1571102504030016', '15'),
       ('9201011806790004', 'Aldi Setiawan Prasetyo', '1979-06-18', 'Laki-laki', 'Sarjana II', '083865432109', 'Kawin', 'WNI', '3278071406060023', '32'),
       ('3271055101980003', 'Maya Ayu Puspita', '1998-11-01', 'Perempuan', 'Diploma IV', '081223456789', 'Belum Kawin', 'WNA', '3271051104220009', '36'),
       ('3519141209810003', 'Rizki Ramadhan Purnomo', '1981-12-09', 'Laki-laki', 'Diploma III', '083878901234', 'Kawin', 'WNI', '3519141601090100', '35'),
       ('6271044205780002', 'Lina Permata Sari', '1978-02-05', 'Perempuan', 'Tamat SD/Sederajat', '081356789012', 'Kawin', 'WNI', '5309180601000078', '53'),
       ('1871133003920004', 'Rifqi Akbar Maulana', '1992-03-30', 'Laki-laki', 'Tamat SMP/Sederajat', '089843210987', 'Kawin', 'WNI', '1271213105210023', '12'),
       ('1971035410030002', 'Novi Anggraeni Utami', '2003-10-14', 'Perempuan', 'Tamat SMP/Sederajat', '081310987654', 'Belum Kawin', 'WNI', '5309180601000078', '53'),
       ('1771021704840001', 'Bagus Satria Prasetyo', '1984-04-17', 'Laki-laki', 'Sarjana I', '083887654321', 'Kawin', 'WNI', '8171041602170078', '81'),
       ('1171056808950002', 'Siska Nurul Hidayati', '1995-08-28', 'Perempuan', 'Sarjana I', '081265432109', 'Kawin', 'WNI', '7173041601050017', '71'),
       ('7501090706720004', 'Fahmi Rizky Nugroho', '1972-07-06', 'Laki-laki', 'Diploma III', '081334567890', 'Kawin', 'WNI', '7171102704180006', '71'),
       ('5371045909900002', 'Ani Kartika Sari', '1990-09-19', 'Perempuan', 'Tamat SD/Sederajat', '089890123456', 'Kawin', 'WNI', '7174041506990024', '71'),
       ('7602080602830002', 'Yoga Pratama Wibowo', '1983-06-02', 'Laki-laki', 'Diploma IV', '089887654321', 'Kawin', 'WNI', '7407081705940000', '74'),
       ('6474026701990001', 'Citra Wahyuni Kusuma', '1999-01-27', 'Perempuan', 'Sarjana I', '081254321098', 'Belum Kawin', 'WNI', '8171041602170078', '81'),
       ('6172041108770004', 'Dani Setiawan Prakoso', '1977-11-08', 'Laki-laki', 'Sarjana II', '081398765432', 'Kawin', 'WNI', '6271040808100023', '62'),
       ('7173045605880003', 'Rina Agustina Purnama', '1988-05-16', 'Perempuan', 'Tamat SMA/Sederajat', '081232109876', 'Kawin', 'WNA', '1871131004230056', '18'),
       ('7471102212960001', 'Rian Wijaya Kusuma', '2001-12-22', 'Laki-laki', 'Tamat SMA/Sederajat', '089810987654', 'Belum Kawin', 'WNI', '1971033012090011', '19'),
       ('1272084810960003', 'Ika Sari Utami', '1996-08-10', 'Perempuan', 'Sarjana I', '081287654321', 'Belum Kawin', 'WNI', '1771020610140123', '17'),
       ('1375020104750005', 'Adit Hidayatullah', '1975-01-04', 'Laki-laki', 'Sarjana I', '083823456789', 'Kawin', 'WNI', '7602080711920064', '76'),
       ('3579021011890002', 'Nanda Cahya Pratama', '1989-10-11', 'Laki-laki', 'Diploma III', '089856789012', 'Kawin', 'WNI', '6474020604100023', '64'),
       ('1604106502930002', 'Eka Putri Rahayu', '1993-02-25', 'Perempuan', 'Diploma III', '081390123456', 'Kawin', 'WNI', '6172041802070042', '61'),
       ('7174040703740001', 'Indra Pramudita Wibowo', '1974-07-03', 'Laki-laki', 'Tamat SMP/Sederajat', '083834567890', 'Kawin', 'WNA', '1272080211130001', '12'),
       ('1604044904000004', 'Novita Indriani Sari', '2000-09-09', 'Perempuan', 'Tamat SD/Sederajat', '081287654321', 'Belum Kawin', 'WNI', '7471101802140018', '74'),
       ('3275115205520006', 'Dilan Rosita Putri', '1952-12-05', 'Perempuan', 'Tamat SD/Sederajat', '081390876543', 'Kawin', 'WNI', '9201011402950013', '92'),
       ('3401045809480003', 'Alya Roseta', '1948-09-18', 'Perempuan', 'Belum Tamat SD/Sederajat', '0838556214778', 'Kawin', 'WNI', '3579021203040071', '35'),
       ('2171082607590004', 'Candra Armandito', '1959-07-26', 'Laki-laki', 'Tamat SMP/Sederajat', '0812663300458', 'Kawin', 'WNI', '5371042211080015', '53'),
       ('8171040302620002', 'Rio Asendra Wijaya', '1962-03-02', 'Laki-laki', 'Tamat SMP/Sederajat', '0384520013987', 'Kawin', 'WNI', '8271052506040009', '82'),
       ('1371111602450002', 'Keanu Azhar Adyatama', '1945-02-16', 'Laki-laki', 'Sarjana I', '0838652013965', 'Kawin', 'WNI', '6171051708120047', '61'),
       ('5308101808620001', 'Baim Wedya', '1962-08-18', 'Laki-laki', 'Tamat SMA/Sederajat', '0813652010012', 'Kawin', 'WNI', '3310151008940017', '33'),
       ('1902057004570004', 'Ning Widyantari', '1957-04-30', 'Perempuan', 'Tamat SMP/Sederajat', '0898120303055', 'Belum Kawin', 'WNI', '8272070109120039', '82'),
       ('7407084402560004', 'Widina Mawar Rossita', '1956-02-14', 'Perempuan', 'Tamat SMA/Sederajat', '0812256410055', 'Belum Kawin', 'WNI', '6403092605000013', '64'),
       ('3310152310610002', 'Guntur Wicaksana', '1961-10-23', 'Laki-laki', 'Sarjana III', '0812263255418', 'Kawin', 'WNI', '5314040701140034', '53'),
       ('8272072107680002', 'Heri Catur Nasution', '1968-07-21', 'Laki-laki', 'Diploma III', '0817452103965', 'Kawin', 'WNI', '1372010705900090', '13'),
       ('6403091912530002', 'Dwi Seryanto', '1953-12-19', 'Laki-laki', 'Diploma IV', '0813100002895', 'Kawin', 'WNI', '8207010302970000', '82'),
       ('5314046808600001', 'Nur Cahaya Wacana', '1960-08-28', 'Perempuan', 'Belum Tamat SD/Sederajat', '0869210365201', 'Belum Kawin', 'WNI', '7313112608980017', '73'),
       ('1372014908480002', 'Annella Dewanta', '1948-08-19', 'Perempuan', 'Diploma IV', '0812200156897', 'Kawin', 'WNI', '5204120402020005', '52'),
       ('8207016201580002', 'Silvia Werya Hasan', '1958-01-22', 'Perempuan', 'Belum Tamat SD/Sederajat', '0813204682410', 'Kawin', 'WNA', '8271081305950010', '82'),
       ('7313112004520003', 'Yudha Alrudi', '1952-04-20', 'Laki-laki', 'Diploma III', '0869521001002', 'Kawin', 'WNI', '1172013101970079', '11'),
       ('5204121506630004', 'Gilang Mahendra', '1963-06-15', 'Laki-laki', 'Tamat SMA/Sederajat', '08132000600088', 'Kawin', 'WNI', '7102033110200015', '71'),
       ('8271086011620001', 'Bunga Alma Melati', '1962-11-20', 'Perempuan', 'Tamat SMP/Sederajat', '0812564107891', 'Kawin', 'WNI', '7210142504030016', '72'),
       ('8271052702510001', 'Yanuar Hasbuan Romo', '1951-02-27', 'Laki-laki', 'Belum Tamat SD/Sederajat', '0825697264812', 'Kawin', 'WNI', '3172042308970013', '31'),
       ('1172011805590005', 'Christian Dwi Masendra', '1959-05-18', 'Laki-laki', 'Diploma III', '0813200638995', 'Belum Kawin', 'WNI', '7317222309990063', '73'),
       ('7102034710560003', 'Diantari Megasri', '1956-10-17', 'Perempuan', 'Sarjana I', '0838456321007', 'Kawin', 'WNA', '5305050903980042', '53'),
       ('7210143107580004', 'Rosakha Yusuf Prasetyo', '1958-07-31', 'Laki-laki', 'Belum Tamat SD/Sederajat', '0898555632778', 'Belum Kawin', 'WNI', '7103080908910077', '71'),
       ('3172046603520003', 'Nurul Fitriani Dewi', '1952-03-26', 'Perempuan', 'Tamat SD/Sederajat', '08978234587657', 'Kawin', 'WNI', '1375020711030002', '13'),
       ('7317221604600003', 'Budi Santoso Pratama', '1960-04-16', 'Laki-laki', 'Tamat SMA/Sederajat', '0813087678965', 'Kawin', 'WNI', '1604102303090008', '16'),
       ('5309186111610004', 'Siti Aisyah Purnama', '1961-11-21', 'Perempuan', 'Diploma III', '08989882776566', 'Belum Kawin', 'WNI', '7174041506990024', '71'),
       ('5305051409530001', 'Fahmi Rizky Ramadhan', '1953-09-14', 'Laki-laki', 'Diploma III', '0878625618899', 'Kawin', 'WNA', '1604041007200012', '15'),
       ('7103084708540005', 'Rahmawati Putri', '1954-08-07', 'Perempuan', 'Sarjana III', '081267897675', 'Kawin', 'WNA', '3275110908990031', '32');");
    }
}
