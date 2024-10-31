<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warung;

class WarungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warung::insert([
            'nama_wrg' => 'Warung Makan Kebon Jati',
            'verif_status' => 'pending',
            'nohp' => '081234567890',
            'kategori' => 'nasi',
            'lokasi' => 'Bandung',
            'jam_buka' => '08:00-21:00',
            'detail' => 'Menyediakan berbagai macam menu nasi dengan lauk pauk yang lezat dan higienis.'
            ]);
            
        Warung::insert([
        'nama_wrg' => 'Warung Sembako Pak Yanto',
        'verif_status' => 'verified',
        'nohp' => '082112345678',
        'kategori' => 'sembako',
        'lokasi' => 'Bandung',
        'jam_buka' => '07:00-20:00',
        'detail' => 'Menjual kebutuhan pokok seperti beras, gula, minyak goreng, dan lain-lain.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Kopi Cinta',
        'verif_status' => 'verified',
        'nohp' => '081398765432',
        'kategori' => 'kopi',
        'lokasi' => 'Bandung',
        'jam_buka' => '10:00-23:00',
        'detail' => 'Menyajikan berbagai macam kopi lokal dan internasional dengan harga terjangkau.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Jamu Gendong Ibu Siti',
        'verif_status' => 'pending',
        'nohp' => '082212345697',
        'kategori' => 'jamu',
        'lokasi' => 'Bandung',
        'jam_buka' => '08:00-18:00',
        'detail' => 'Menjual berbagai macam jamu tradisional untuk menjaga kesehatan dan kebugaran tubuh.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Warung Internet Cepat',
        'verif_status' => 'verified',
        'nohp' => '085712345612',
        'kategori' => 'internet',
        'lokasi' => 'Bandung',
        'jam_buka' => '09:00-22:00',
        'detail' => 'Menyediakan jasa akses internet cepat dan terjangkau.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Nasi Goreng Kambing',
        'verif_status' => 'pending',
        'nohp' => '081245678123',
        'kategori' => 'nasi',
        'lokasi' => 'Bandung',
        'jam_buka' => '17:00-01:00',
        'detail' => 'Menyediakan nasi goreng kambing yang lezat dengan bumbu khas.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Toko Sembako Harapan',
        'verif_status' => 'verified',
        'nohp' => '082334567823',
        'kategori' => 'sembako',
        'lokasi' => 'Bandung',
        'jam_buka' => '07:00-20:00',
        'detail' => 'Menjual kebutuhan pokok dengan harga terjangkau dan kualitas terjamin.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Kopi Sedap Malam',
        'verif_status' => 'pending',
        'nohp' => '081283746592',
        'kategori' => 'kopi',
        'lokasi' => 'Bandung',
        'jam_buka' => '18:00-02:00',
        'detail' => 'Menyediakan kopi dengan berbagai varian rasa yang nikmat dan hangat.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Jamu Sehat Ibu Sri',
        'verif_status' => 'verified',
        'nohp' => '085678912345',
        'kategori' => 'jamu',
        'lokasi' => 'Bandung',
        'jam_buka' => '08:00-18:00',
        'detail' => 'Menjual jamu tradisional yang berkhasiat untuk menjaga kesehatan dan kebugaran.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Internet Station',
        'verif_status' => 'pending',
        'nohp' => '081555664422',
        'kategori' => 'internet',
        'lokasi' => 'Bandung',
        'jam_buka' => '09:00-21:00',
        'detail' => 'Menyediakan jasa internet dengan koneksi stabil dan harga bersahabat.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Nasi Ayam Pak Dede',
        'verif_status' => 'verified',
        'nohp' => '082255556677',
        'kategori' => 'nasi',
        'lokasi' => 'Bandung',
        'jam_buka' => '08:00-22:00',
        'detail' => 'Menyediakan nasi ayam yang lezat dengan sambal dan lalapan segar.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Warung Sembako Bunda',
        'verif_status' => 'pending',
        'nohp' => '081234556677',
        'kategori' => 'sembako',
        'lokasi' => 'Bandung',
        'jam_buka' => '07:00-20:00',
        'detail' => 'Menyediakan kebutuhan pokok sehari-hari dengan harga yang kompetitif.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Kopi Hijau',
        'verif_status' => 'verified',
        'nohp' => '082133445566',
        'kategori' => 'kopi',
        'lokasi' => 'Bandung',
        'jam_buka' => '09:00-23:00',
        'detail' => 'Menyajikan kopi hijau yang sehat dan berkualitas untuk kesehatan tubuh.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Jamu Beras Kencur Mbak Yuni',
        'verif_status' => 'pending',
        'nohp' => '085323456789',
        'kategori' => 'jamu',
        'lokasi' => 'Bandung',
        'jam_buka' => '08:00-18:00',
        'detail' => 'Menjual jamu beras kencur yang segar dan berkhasiat untuk menjaga stamina dan daya tahan tubuh.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Warung Internet Pintar',
        'verif_status' => 'verified',
        'nohp' => '085776655443',
        'kategori' => 'internet',
        'lokasi' => 'Bandung',
        'jam_buka' => '09:00-21:00',
        'detail' => 'Menyediakan jasa internet dengan kecepatan tinggi dan berbagai fasilitas pendukung.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Nasi Uduk Ibu Murni',
        'verif_status' => 'pending',
        'nohp' => '081234983210',
        'kategori' => 'nasi',
        'lokasi' => 'Bandung',
        'jam_buka' => '06:00-20:00',
        'detail' => 'Menyajikan nasi uduk dengan berbagai lauk pauk yang lezat dan harga terjangkau.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Toko Sembako Sejahtera',
        'verif_status' => 'verified',
        'nohp' => '082345672134',
        'kategori' => 'sembako',
        'lokasi' => 'Bandung',
        'jam_buka' => '07:00-20:00',
        'detail' => 'Menjual berbagai kebutuhan pokok dengan kualitas terbaik dan harga wajar.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Kopi Merapi',
        'verif_status' => 'pending',
        'nohp' => '081255544332',
        'kategori' => 'kopi',
        'lokasi' => 'Bandung',
        'jam_buka' => '10:00-00:00',
        'detail' => 'Menyajikan kopi nikmat dengan racikan bumbu khas yang menggugah selera.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Jamu Madu Jahe',
        'verif_status' => 'verified',
        'nohp' => '085634567821',
        'kategori' => 'jamu',
        'lokasi' => 'Bandung',
        'jam_buka' => '08:00-18:00',
        'detail' => 'Menjual jamu madu jahe yang dapat menghangatkan tubuh dan menjaga kesehatan.'
        ]);
        
        Warung::insert([
        'nama_wrg' => 'Warung Internet Galaxy',
        'verif_status' => 'pending',
        'nohp' => '081455678932',
        'kategori' => 'internet',
        'lokasi' => 'Bandung',
        'jam_buka' => '09:00-22:00',
        'detail' => 'Menyediakan layanan internet cepat dan nyaman dengan berbagai fasilitas menarik.'
        ]);
    }
}
