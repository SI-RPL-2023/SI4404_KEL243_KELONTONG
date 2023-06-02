<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Admin',
            'email' => 'admin@kelontong.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'premium',
            'user_status' => 'admin',
            'foto' => 'images/avatar.png',
            'nohp' => '081234567890',
            ]);
        User::insert([
            'name' => 'Andi Wijaya',
            'email' => 'andi.wijaya@gmail.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'free',
            'user_status' => 'seeker',
            'seeker_request_status' => 'approved',
            'seeker_nik' => '1234567890',
            'seeker_alamat' => 'Jalan Raya No. 123',
            'seeker_alasan' => 'Saya ingin menjadi seeker untuk membantu orang-orang yang membutuhkan dan memberikan kontribusi positif dalam masyarakat.',
            'foto' => 'images/users/andi_wijaya.jpg',
            'nohp' => '081234567890',
            'seeker_poin' => 150000
            ]);
        
        User::insert([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@yahoo.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'premium',
            'user_status' => 'user',
            'seeker_request_status' => 'pending',
            'seeker_nik' => '1234567890',
            'seeker_alamat' => 'Jalan Raya No. 222',
            'seeker_alasan' => 'Saya ingin menjadi seeker untuk membantu orang-orang yang membutuhkan dan memberikan kontribusi positif dalam masyarakat.',
            'foto' => 'images/users/budi_santoso.jpg',
            'nohp' => '082345678901',
            ]);
        
        User::insert([
            'name' => 'Cinta Ayu',
            'email' => 'cinta.ayu@hotmail.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'free',
            'user_status' => 'user',
            'seeker_request_status' => 'not requested',
            'foto' => 'images/users/cinta_ayu.jpg',
            'nohp' => '083456789012',
            ]);
        
        User::insert([
            'name' => 'Dwi Utami',
            'email' => 'dwi.utami@gmail.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'premium',
            'user_status' => 'seeker',
            'seeker_request_status' => 'approved',
            'seeker_nik' => '0987654321',
            'seeker_alamat' => 'Jalan Merdeka No. 456',
            'seeker_alasan' => 'Saya memiliki waktu luang yang cukup dan ingin menghabiskannya dengan melakukan kegiatan sosial. Menjadi seeker adalah salah satu cara untuk berkontribusi dalam komunitas.',
            'foto' => 'images/users/dwi_utami.jpg',
            'nohp' => '084567890123',
            'seeker_poin' => 250000
            ]);
        
        User::insert([
            'name' => 'Eka Putra',
            'email' => 'eka.putra@yahoo.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'free',
            'user_status' => 'user',
            'seeker_request_status' => 'pending',
            'seeker_nik' => '1234567890',
            'seeker_alamat' => 'Jalan Cipagalo 1',
            'seeker_alasan' => 'Saya senang mencatat warung',
            'foto' => 'images/users/eka_putra.jpg',
            'nohp' => '085678901234'
            ]);
        
        User::insert([
            'name' => 'Fajar Pratama',
            'email' => 'fajar.pratama@hotmail.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'premium',
            'user_status' => 'user',
            'seeker_request_status' => 'not requested',
            'foto' => 'images/users/fajar_pratama.jpg',
            'nohp' => '086789012345'
            ]);
        
        User::insert([
            'name' => 'Gita Dewi',
            'email' => 'gita.dewi@gmail.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'free',
            'user_status' => 'seeker',
            'seeker_request_status' => 'approved',
            'seeker_nik' => '2468135790',
            'seeker_alamat' => 'Jalan Cipta No. 789',
            'seeker_alasan' => 'Saya merasa terpanggil untuk membantu orang-orang yang kurang beruntung. Sebagai seeker, saya berharap dapat membuat perbedaan dalam hidup mereka.',
            'foto' => 'images/users/gita_dewi.jpg',
            'nohp' => '087890123456',
            'seeker_poin' => 180000
            ]);

        User::insert([
            'name' => 'Hana Sari',
            'email' => 'hana.sari@yahoo.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'premium',
            'user_status' => 'user',
            'seeker_request_status' => 'not requested',
            'foto' => 'images/users/hana_sari.jpg',
            'nohp' => '088901234567'
            ]);
                
        User::insert([
        'name' => 'Indra Kusuma',
        'email' => 'indra.kusuma@hotmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'free',
        'user_status' => 'user',
        'seeker_request_status' => 'pending',
        'seeker_nik' => '1234567890',
        'seeker_alamat' => 'Terusan Buah Batu 4',
        'seeker_alasan' => 'Saya gabut tidak ada kerjaan',
        'foto' => 'images/users/indra_kusuma.jpg',
        'nohp' => '089012345678'
            ]);
        
        User::insert([
        'name' => 'Joko Hartono',
        'email' => 'joko.hartono@gmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'seeker_request_status' => 'approved',
        'seeker_nik' => '1357924680',
        'seeker_alamat' => 'Jalan Sejahtera No. 246',
        'seeker_alasan' => 'Saya percaya bahwa memberikan waktu dan upaya saya untuk orang lain adalah tindakan yang bermakna. Melalui menjadi seeker, saya dapat memberikan dampak positif dalam komunitas.',
        'foto' => 'images/users/joko_hartono.jpg',
        'nohp' => '081234567891',
        'seeker_poin' => 350000
            ]);
        
        User::insert([
        'name' => 'Kurnia Wati',
        'email' => 'kurnia.wati@yahoo.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'free',
        'user_status' => 'user',
        'seeker_request_status' => 'not requested',
        'foto' => 'images/users/kurnia_wati.jpg',
        'nohp' => '082345678902'
            ]);
        
        User::insert([
        'name' => 'Lestari Putri',
        'email' => 'lestari.putri@hotmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'seeker_request_status' => 'approved',
        'seeker_nik' => '9876543210',
        'seeker_alamat' => 'Jalan Damai No. 567',
        'seeker_alasan' => 'Saya ingin belajar lebih banyak tentang realitas kehidupan orang-orang yang membutuhkan. Sebagai seeker, saya dapat mengalami dan memahami perjuangan mereka secara langsung.',
        'foto' => 'images/users/lestari_putri.jpg',
        'nohp' => '083456789013',
        'seeker_poin' => 200000
            ]);
        
        User::insert([
        'name' => 'Mulyono Susanto',
        'email' => 'mulyono.susanto@gmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'free',
        'user_status' => 'user',
        'seeker_request_status' => 'not requested',
        'foto' => 'images/users/mulyono_susanto.jpg',
        'nohp' => '084567890124'
            ]);
        
        User::insert([
        'name' => 'Nia Rahmawati',
        'email' => 'nia.rahmawati@yahoo.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'premium',
        'user_status' => 'user',
        'seeker_request_status' => 'not requested',
        'foto' => 'images/users/nia_rahmawati.jpg',
        'nohp' => '085678901235'
            ]);

        User::insert([
            'name' => 'Oka Prasetya',
            'email' => 'oka.prasetya@hotmail.com',
            'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
            'plan_status' => 'free',
            'user_status' => 'seeker',
            'seeker_request_status' => 'approved',
            'seeker_nik' => '0123456789',
            'seeker_alamat' => 'Jalan Harmoni No. 890',
            'seeker_alasan' => 'Saya memiliki keinginan kuat untuk berbagi kebahagiaan dan menunjukkan empati kepada sesama. Melalui menjadi seeker, saya dapat memberikan dukungan dan keberanian kepada mereka yang membutuhkan.',          
            'foto' => 'images/users/oka_prasetya.jpg',
            'nohp' => '086789012346',
            'seeker_poin' => 110000
            ]);
            
        User::insert([
        'name' => 'Putri Aisyah',
        'email' => 'putri.aisyah@gmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'premium',
        'user_status' => 'user',
        'seeker_request_status' => 'not requested',
        'foto' => 'images/users/putri_aisyah.jpg',
        'nohp' => '087890123457'
            ]);
        
        User::insert([
        'name' => 'Rizki Permana',
        'email' => 'rizki.permana@yahoo.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'free',
        'user_status' => 'user',
        'seeker_request_status' => 'not requested',
        'foto' => 'images/users/rizki_permana.jpg',
        'nohp' => '088901234568'
            ]);
        
        User::insert([
        'name' => 'Siti Nurhaliza',
        'email' => 'siti.nurhaliza@hotmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'seeker_request_status' => 'approved',
        'seeker_nik' => '5432167890',
        'seeker_alamat' => 'Jalan Bahagia No. 1234',
        'seeker_alasan' => 'Saya ingin menjadi bagian dari perubahan positif dalam masyarakat. Menjadi seeker memberi saya kesempatan untuk terlibat langsung dalam mengatasi masalah sosial.',
        'foto' => 'images/users/siti_nurhaliza.jpg',
        'nohp' => '089012345679',
        'seeker_poin' => 210000
            ]);
        
        User::insert([
        'name' => 'Teguh Purnomo',
        'email' => 'teguh.purnomo@gmail.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'free',
        'user_status' => 'user',
        'seeker_request_status' => 'not requested',
        'foto' => 'images/users/teguh_purnomo.jpg',
        'nohp' => '081234567892'
            ]);
        
        User::insert([
        'name' => 'Umi Kalsum',
        'email' => 'umi.kalsum@yahoo.com',
        'password' => '$2a$10$XtKOA0nH8tD17Uwr2sQ9OedmptvOx0QoqfkkK7VX81CHvSjt83f42',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'seeker_request_status' => 'approved',
        'seeker_nik' => '9876543210',
        'seeker_alamat' => 'Jalan Maju No. 5678',
        'seeker_alasan' => 'Saya percaya bahwa memberikan waktu dan usaha saya untuk membantu orang lain adalah panggilan hidup saya. Sebagai seeker, saya ingin memberikan pengaruh positif dalam kehidupan mereka yang membutuhkan bantuan.',
        'foto' => 'images/users/umi_kalsum.jpg',
        'nohp' => '082345678903',
        'seeker_poin' => 310000
            ]);
        
    }
}
