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
            'name' => 'Andi Wijaya',
            'email' => 'andi.wijaya@gmail.com',
            'password' => '12345678',
            'plan_status' => 'free',
            'user_status' => 'seeker',
            'foto' => 'andi_wijaya.jpg',
            'nohp' => '081234567890',
            'poin' => 150
            ]);
        
        User::insert([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@yahoo.com',
            'password' => '23456789',
            'plan_status' => 'premium',
            'user_status' => 'user',
            'foto' => 'budi_santoso.jpg',
            'nohp' => '082345678901',
            'poin' => 300
            ]);
        
        User::insert([
            'name' => 'Cinta Ayu',
            'email' => 'cinta.ayu@hotmail.com',
            'password' => '34567890',
            'plan_status' => 'free',
            'user_status' => 'user',
            'foto' => 'cinta_ayu.jpg',
            'nohp' => '083456789012',
            'poin' => 80
            ]);
        
        User::insert([
            'name' => 'Dwi Utami',
            'email' => 'dwi.utami@gmail.com',
            'password' => '45678901',
            'plan_status' => 'premium',
            'user_status' => 'seeker',
            'foto' => 'dwi_utami.jpg',
            'nohp' => '084567890123',
            'poin' => 250
            ]);
        
        User::insert([
            'name' => 'Eka Putra',
            'email' => 'eka.putra@yahoo.com',
            'password' => '56789012',
            'plan_status' => 'free',
            'user_status' => 'user',
            'foto' => 'eka_putra.jpg',
            'nohp' => '085678901234',
            'poin' => 90
            ]);
        
        User::insert([
            'name' => 'Fajar Pratama',
            'email' => 'fajar.pratama@hotmail.com',
            'password' => '67890123',
            'plan_status' => 'premium',
            'user_status' => 'user',
            'foto' => 'fajar_pratama.jpg',
            'nohp' => '086789012345',
            'poin' => 400
            ]);
        
        User::insert([
            'name' => 'Gita Dewi',
            'email' => 'gita.dewi@gmail.com',
            'password' => '78901234',
            'plan_status' => 'free',
            'user_status' => 'seeker',
            'foto' => 'gita_dewi.jpg',
            'nohp' => '087890123456',
            'poin' => 180
            ]);

        User::insert([
            'name' => 'Hana Sari',
            'email' => 'hana.sari@yahoo.com',
            'password' => '89012345',
            'plan_status' => 'premium',
            'user_status' => 'user',
            'foto' => 'hana_sari.jpg',
            'nohp' => '088901234567',
            'poin' => 230
            ]);
                
        User::insert([
        'name' => 'Indra Kusuma',
        'email' => 'indra.kusuma@hotmail.com',
        'password' => '90123456',
        'plan_status' => 'free',
        'user_status' => 'user',
        'foto' => 'indra_kusuma.jpg',
        'nohp' => '089012345678',
        'poin' => 120
            ]);
        
        User::insert([
        'name' => 'Joko Hartono',
        'email' => 'joko.hartono@gmail.com',
        'password' => '01234567',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'foto' => 'joko_hartono.jpg',
        'nohp' => '081234567891',
        'poin' => 350
            ]);
        
        User::insert([
        'name' => 'Kurnia Wati',
        'email' => 'kurnia.wati@yahoo.com',
        'password' => '12345678',
        'plan_status' => 'free',
        'user_status' => 'user',
        'foto' => 'kurnia_wati.jpg',
        'nohp' => '082345678902',
        'poin' => 100
            ]);
        
        User::insert([
        'name' => 'Lestari Putri',
        'email' => 'lestari.putri@hotmail.com',
        'password' => '23456789',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'foto' => 'lestari_putri.jpg',
        'nohp' => '083456789013',
        'poin' => 200
            ]);
        
        User::insert([
        'name' => 'Mulyono Susanto',
        'email' => 'mulyono.susanto@gmail.com',
        'password' => '34567890',
        'plan_status' => 'free',
        'user_status' => 'user',
        'foto' => 'mulyono_susanto.jpg',
        'nohp' => '084567890124',
        'poin' => 170
            ]);
        
        User::insert([
        'name' => 'Nia Rahmawati',
        'email' => 'nia.rahmawati@yahoo.com',
        'password' => '45678901',
        'plan_status' => 'premium',
        'user_status' => 'user',
        'foto' => 'nia_rahmawati.jpg',
        'nohp' => '085678901235',
        'poin' => 290
            ]);

        User::insert([
            'name' => 'Oka Prasetya',
            'email' => 'oka.prasetya@hotmail.com',
            'password' => '56789012',
            'plan_status' => 'free',
            'user_status' => 'seeker',
            'foto' => 'oka_prasetya.jpg',
            'nohp' => '086789012346',
            'poin' => 110
            ]);
            
        User::insert([
        'name' => 'Putri Aisyah',
        'email' => 'putri.aisyah@gmail.com',
        'password' => '67890123',
        'plan_status' => 'premium',
        'user_status' => 'user',
        'foto' => 'putri_aisyah.jpg',
        'nohp' => '087890123457',
        'poin' => 260
            ]);
        
        User::insert([
        'name' => 'Rizki Permana',
        'email' => 'rizki.permana@yahoo.com',
        'password' => '78901234',
        'plan_status' => 'free',
        'user_status' => 'user',
        'foto' => 'rizki_permana.jpg',
        'nohp' => '088901234568',
        'poin' => 140
            ]);
        
        User::insert([
        'name' => 'Siti Nurhaliza',
        'email' => 'siti.nurhaliza@hotmail.com',
        'password' => '89012345',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'foto' => 'siti_nurhaliza.jpg',
        'nohp' => '089012345679',
        'poin' => 210
            ]);
        
        User::insert([
        'name' => 'Teguh Purnomo',
        'email' => 'teguh.purnomo@gmail.com',
        'password' => '90123456',
        'plan_status' => 'free',
        'user_status' => 'user',
        'foto' => 'teguh_purnomo.jpg',
        'nohp' => '081234567892',
        'poin' => 130
            ]);
        
        User::insert([
        'name' => 'Umi Kalsum',
        'email' => 'umi.kalsum@yahoo.com',
        'password' => '01234567',
        'plan_status' => 'premium',
        'user_status' => 'seeker',
        'foto' => 'umi_kalsum.jpg',
        'nohp' => '082345678903',
        'poin' => 310
            ]);
        
    }
}
