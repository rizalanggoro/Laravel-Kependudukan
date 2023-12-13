<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederCatatanKhusus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO catatan_khususes (kode_catatan, jenis, tanggal, isi, no_kk) VALUES ('JH-456789', 'Kesehatan', '2002-02-14', 'Pengrusakan kendaraan bermotor, pemalsuan data pribadi, dan pelanggaran hak konsumen', '1171051506210069'),
        ('QM-987654', 'Kejahatan', '2015-07-30', 'Pencemaran lingkungan ringan, pemalsuan surat keterangan, pencucian uang kecil,  dan pelanggaran ketertiban umum', '6171051708120047'),
        ('AB-123456', 'Kejahatan', '2017-12-05', 'Pemalsuan cek, penipuan asuransi, dan pemalsuan uang', '1671142306000001'),
        ('YU-567890', 'Kesehatan', '2012-10-18', 'Tifus dan infeksi Jamur (misalnya, kandidiasis)', '3174050402020005'),
        ('PO-345678', 'Pendidikan', '1965-03-26', 'Juara Olimpiade Matematika Tingkat Nasional, pemenang Kompetisi Fisika Internasional, dan mahasiswa Terbaik dalam Penelitian Sains.', '1604041007200012'),
        ('KL-876543', 'Kejahatan', '2000-04-16', 'Pelecehan seksual di tempat kerja,pelecehan verbal, pencurian listrik, penggelapan pajak kecil, dan pelanggaran lingkungan', '1604102303090008'),
        ('RT-234567', 'Kesehatan', '2001-11-21', 'Malaria, diare, dan ISPA (Infeksi Saluran Pernapasan Akut)', '7174041506990024'),
        ('FD-789012', 'Pendidikan', '1965-02-14', 'Juara 1 Lomba Renang Nasional, pemenang Kompetisi Fotografi Internasional, dan atlet Terbaik dalam Kejuaraan Bulutangkis Asia.', '6403092605000013'),
        ('XC-890123', 'Kejahatan', '2001-10-23', 'Penyiksaan ringan', '5314040701140034'),
        ('ZN-654321', 'Kesehatan', '2008-07-21', 'Influenza, demam Dengue, dan tuberkulosis', '1372010705900090'),
        ('VB-210987', 'Pendidikan', '1993-12-19', 'Siswa Terbaik dalam Olimpiade Bahasa Inggris, tim Robotika Sekolah Juara 1 Nasional, dan Mahasiswa Terpilih untuk Program Pertukaran Pelajar.', '8207010302970000'),
        ('WK-109876', 'Pendidikan', '1980-08-28', 'Juara Lomba Masak Nasional, pemenang Kompetisi Desain Mode Internasional, dan pelukis Terbaik dalam Pameran Seni Lokal.', '7313112608980017'),
        ('PE-543210', 'Kejahatan', '1985-08-19', 'Pelanggaran hak kekayaan intelektual', '5204120402020005'),
        ('UY-678901', 'Kesehatan', '1995-01-22', 'Diabetes tipe 2, hipertensi, dan osteoarthritis', '8271081305950010'),
        ('JI-432109', 'Kesehatan', '1989-04-20', 'Flu biasa, tonsilitis, dan luka bakar ringan', '1172013101970079'),
        ('MO-890123', 'Kejahatan', '2000-12-05', 'Penyalahgunaan wewenang', '1902051208940015'),
        ('QP-567890', 'Kejahatan', '2014-09-23', 'Pengancaman kecil', '7501091707000045'),
        ('XR-345678', 'Kesehatan', '2009-07-11', 'Hepatitis, campak, leptospirosis, dan HIV/AIDS', '1902051208940015'),
        ('AZ-987654', 'Pendidikan', '2002-02-14', 'Pemenang Kompetisi Menulis Cerpen Tingkat Nasional, juara Debat Bahasa Indonesia Nasional, dan siswa Terbaik dalam Olimpiade Ekonomi.', '1171051506210069'),
        ('GD-123456', 'Kejahatan', '2015-07-30', 'Penggunaan narkotika di tempat umum, pelanggaran privasi, dan penyalahgunaan teknologi informasi', '6171051708120047'),
        ('HJ-456789', 'Pendidikan', '1997-12-05', 'Juara Balap Sepeda Nasional, pemenang Kompetisi Film Pendek Internasional, dan atlet Terbaik dalam Kejuaraan Atletik Dunia.', '1671142306000001'),
        ('LU-321098', 'Kejahatan', '2012-10-18', 'Pemalsuan obat-obatan', '3174050402020005'),
        ('TC-234567', 'Pendidikan', '1999-03-22', 'Pemenang Kompetisi Bisnis Plan Nasional, juara 1 Lomba Inovasi Produk Usaha, dan pengusaha Muda Terbaik dalam Kompetisi Start-up', '3273081305950010'),
        ('BK-789012', 'Kesehatan', '2007-11-08', 'Infeksi saluran pernapasan atas, gastritis, dan migrain', '3578032506040009'),
        ('YH-109876', 'Kesehatan', '2004-12-20', 'Dermatitis alergi dan asma bronkial', '3276112506190015'),
        ('NI-210987', 'Kejahatan', '2012-03-06', 'Penyelundupan senjata kecil', '3403072805030004'),
        ('RF-543210', 'Pendidikan', '2005-04-19', 'Juara Lomba Penelitian Kesehatan Tingkat Nasiona dan mahasiswa Terbaik Program Kesehatan Masyarakat', '7371153110200015'),
        ('VW-876543', 'Kesehatan', '2019-09-27', 'Penggelapan kendaraan bermotor, perbuatan tidak menyenangkan, dan pengeroyokan kecil', '3322172504030016'),
        ('PD-654321', 'Kejahatan', '2008-07-08', 'Penyalahgunaan kekuasaan kecil', '5171041406060023'),
        ('JO-432109', 'Pendidikan', '1999-01-14', 'Pemenang Kompetisi Karya Inovatif Remaja, juara Lomba Robotika Internasional, dan siswa Penerima Medali Emas Olimpiade Fisika Asia', '3671091402950013');");
    }
}
