<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederKeluarga extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("insert into keluargas (no_kk, nama_kepala_keluarga, jumlah_anggota, domisili, kode_provinsi) values 
        ('3174050402020005', 'Budi Santoso', '4', 'Jakarta Selatan', '31'),
        ('3273081305950010', 'Ibu Dewi Wulandari', '3', 'Bandung', '32'), 
        ('3578032506040009', 'Tono Prasetyo', '5', 'Surabaya', '35'),
        ('3403072805030004', 'Ratna Sari', '2', 'Yogyakarta', '34'),
        ('7371153110200015', 'Hadi Saputra', '6', 'Makassar', '73'),
        ('3322172504030016', 'Ibu Siti Rahayu', '4', 'Semarang', '33'),
        ('5171041406060023', 'Joko Susanto', '3', 'Denpasar', '51'),
        ('3671091402950013', 'Sri Lestari', '5', 'Tangerang', '36'),
        ('3573051302120089', 'Agus Riyanto', '2', 'Malang', '35'),
        ('1671142306000001', 'Siti Fatimah', '4', 'Palembang', '16'),
        ('7171102704180006', 'Andi Wijaya', '6', 'Manado', '71'),
        ('1271213105210023', 'Maya Indah', '3', 'Medan', '12'),
        ('3276112506190015', 'Heryanto Putra', '2', 'Depok', '32'),
        ('6171051708120047', 'Dewi Nurul', '5', 'Pontianak', '61'),
        ('3372042901140046', 'Dwi Wahyuni', '4', 'Solo', '33'),
        ('2171021602170193', 'Ahmad Ramadhan', '3', 'Batam', '21'),
        ('6471031211020093', 'Erna Yulianti', '6', 'Balikpapan', '64'),
        ('1471020208130000', 'Fauzi Rahman', '5', 'Pekanbaru', '14'),
        ('1371092803010006', 'Retno Widiastuti', '2', 'Padang', '13'),
        ('6371032812030000', 'Bayu Nugroho', '3', 'Banjarmasin', '63'),
        ('8171041602170078', 'Ani Susanti', '4', 'North Halmahera', '81'),
        ('6472082305980097', 'Hari Setiawan', '5', 'Samarinda', '64'),
        ('5271063010060093', 'Ika Marwati', '6', 'Mataram', '52'),
        ('3274021305950010', 'Imam Surya', '4', 'Cirebon', '32'),
        ('1375022506040009', 'Dewi Astuti', '3', 'Bukittinggi', '13'),
        ('7271032805030004', 'Eko Prasetyo', '2', 'Palu', '72'),
        ('3604133110200015', 'Nurul Hidayah', '5', 'Serang', '36'),
        ('1571102504030016', 'Arifin Hadi', '6', 'Jambi', '15'),
        ('3278071406060023', 'Yuli Hartati', '2', 'Tasikmalaya', '32'),
        ('9201011402950013', 'Dwi Wahyu', '3', 'Sorong', '92'),
        ('3271051104220009', 'Wahyu Setiawan', '4', 'Bogor', '36'),
        ('3519141601090100', 'Nita Anggraini', '5', 'Madiun', '35'),
        ('6271040808100023', 'Joko Santoso', '6', 'Palangkaraya', '62'),
        ('1871131004230056', 'Lina Septiani', '2', 'Lampung', '18'),
        ('1971033012090011', 'Dedi Saputra', '4', 'Pangkal Pinang', '19'),
        ('1771020610140123', 'Sri Mulyati', '3', 'Bengkulu', '17'),
        ('1171051506210069', 'Bagus Wijaya', '5', 'Banda Aceh', '11'),
        ('7501091707000045', 'Santi Fitriani', '6', 'Gorontalo', '75'),
        ('5371042211080015', 'Surya Putra', '2', 'Kupang', '53'),
        ('7602080711920064', 'Novi Indriani', '3', 'Mamuju', '76'),
        ('6474020604100023', 'Yanto Saputro', '4', 'Bontang', '64'),
        ('6172041802070042', 'Indah Sari', '5', 'Singkawang', '61'),
        ('7173041601050017', 'Sugeng Santoso', '6', 'Tomohon', '71'),
        ('7471101802140018', 'Yeni Susilowati', '3', 'Kendari', '74'),
        ('1272080211130001', 'Rudi Prabowo', '2', 'Pematangsiantar', '12'),
        ('1375020711030002', 'Tia Wulandari', '5', 'Bukit Tinggi', '13'),
        ('3579021203040071', 'Hadi Widodo', '4', 'Batu', '35'),
        ('1604102303090008', 'Nia Rahmawati', '6', 'Lahat', '16'),
        ('7174041506990024', 'Ade Kurniawan', '3', 'Kotamobagu', '71'),
        ('1604041007200012', 'Winda Indah Sari', '2', 'Lahat', '15'),
        ('3275110908990031', 'Juan Triambodo', '5', 'Bekasi', '32'),
        ('1902051208940015', 'Surya Utama', '6', 'Belitung', '19'),
        ('7407081705940000', 'Nita Sari', '4', 'Wakatobi', '74'),
        ('3310151008940017', 'Budi Nugroho', '5', 'Karimun Jawa', '33'),
        ('8272070109120039', 'Ratna Permata', '7', 'Tidore', '82'),
        ('6403092605000013', 'Joko Susanto', '4', 'Berau', '64'),
        ('5314040701140034', 'Rini Setiawan', '3', 'Rote', '53'),
        ('1372010705900090', 'Arif Cahyono', '2', 'Solok', '13'),
        ('8207010302970000', 'Maya Dewi', '5', 'Morotai', '82'),
        ('7313112608980017', 'Eko Kusuma', '4', 'Wajo', '73'),
        ('5204120402020005', 'Fitriani Siregar', '4', 'Sumbawa Besar', '52'),
        ('8271081305950010', 'Hadi Wirawan', '3', 'Jailolo', '82'),
        ('8271052506040009', 'Ayu Purnama', '6', 'Ternate', '82'),
        ('1172013101970079', 'Adi Saputra', '2', 'Sabang', '11'),
        ('7102033110200015', 'Sri Utami', '4', 'Minahasa', '71'),
        ('7210142504030016', 'Heru Pratama', '6', 'Sigi', '72'),
        ('3172042308970013', 'Retno Indah', '7', 'Jakarta Utara', '31'),
        ('7317222309990063', 'Fajar Wijaya', '3', 'Bajo Barat', '73'),
        ('5309180601000078', 'Rini Sulistyowati', '4', 'Ngada', '53'),
        ('5305050903980042', 'Dwi Santoso', '6', 'Alor', '53'),
        ('7103080908910077', 'Lina Indriani', '2', 'Sangihe', '71');");
    }
}
