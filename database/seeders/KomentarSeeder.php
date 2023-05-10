<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Komentar;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komentar::insert([
            'id_wrg' => '1',
            'id_usr' => '2',
            'isi' => 'Nasi nya enak banget, recommended!',
            'created_at' => '2023-04-14 10:00:00',
            'updated_at' => '2023-04-14 10:00:00'
            ]);
            
        Komentar::insert([
        'id_wrg' => '2',
        'id_usr' => '4',
        'isi' => 'Harga sembakonya terjangkau, sayang pilihannya kurang banyak.',
        'created_at' => '2023-04-14 10:01:00',
        'updated_at' => '2023-04-14 10:01:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '3',
        'id_usr' => '6',
        'isi' => 'Tempat kopi ini cozy banget, pas buat nongkrong sama teman.',
        'created_at' => '2023-04-14 10:02:00',
        'updated_at' => '2023-04-14 10:02:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '4',
        'id_usr' => '8',
        'isi' => 'Jamu tradisional di warung ini bener-bener membantu saya untuk kesehatan.',
        'created_at' => '2023-04-14 10:03:00',
        'updated_at' => '2023-04-14 10:03:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '5',
        'id_usr' => '10',
        'isi' => 'Sinyal internet di warung ini cukup stabil, cocok buat bekerja atau nonton film online.',
        'created_at' => '2023-04-14 10:04:00',
        'updated_at' => '2023-04-14 10:04:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '6',
        'id_usr' => '12',
        'isi' => 'Nasi goreng di sini pedasnya mantap, saya jadi ketagihan.',
        'created_at' => '2023-04-14 10:05:00',
        'updated_at' => '2023-04-14 10:05:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '7',
        'id_usr' => '14',
        'isi' => 'Sembako lengkap dan mudah ditemukan di warung ini.',
        'created_at' => '2023-04-14 10:06:00',
        'updated_at' => '2023-04-14 10:06:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '8',
        'id_usr' => '16',
        'isi' => 'Barista di warung ini benar-benar mahir dalam menyajikan kopi, recommended!',
        'created_at' => '2023-04-14 10:07:00',
        'updated_at' => '2023-04-14 10:07:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '9',
        'id_usr' => '18',
        'isi' => 'Jamu tradisional di sini rasanya asli, sangat membantu saya untuk kesehatan.',
        'created_at' => '2023-04-14 10:08:00',
        'updated_at' => '2023-04-14 10:08:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '10',
        'id_usr' => '20',
        'isi' => 'Internetnya sangat cepat, saya bisa melakukan tugas saya dengan lancar.',
        'created_at' => '2023-04-14 10:09:00',
        'updated_at' => '2023-04-14 10:09:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '11',
        'id_usr' => '2',
        'isi' => 'Nasi ayamnya enak dan harganya terjangkau, cocok buat makan siang.',
        'created_at' => '2023-04-14 10:10:00',
        'updated_at' => '2023-04-14 10:10:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '12',
        'id_usr' => '4',
        'isi' => 'Sembako di sini lengkap dan harga terjangkau.',
        'created_at' => '2023-04-14 10:11:00',
        'updated_at' => '2023-04-14 10:11:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '13',
        'id_usr' => '6',
        'isi' => 'Cappuccino di sini enak banget, creamy dan aroma kopi yang kuat.',
        'created_at' => '2023-04-14 10:12:00',
        'updated_at' => '2023-04-14 10:12:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '14',
        'id_usr' => '8',
        'isi' => 'Jamu di warung ini sangat membantu untuk meredakan sakit perut saya.',
        'created_at' => '2023-04-14 10:13:00',
        'updated_at' => '2023-04-14 10:13:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '15',
        'id_usr' => '10',
        'isi' => 'Saya senang bisa bekerja di warung internet ini karena suasananya tenang dan nyaman, ditambah lagi dengan sinyal yang stabil.',
        'created_at' => '2023-04-14 10:14:00',
        'updated_at' => '2023-04-14 10:14:00'
        ]);
        
        Komentar::insert([
        'id_wrg' => '16',
        'id_usr' => '12',
        'isi' => 'Nasi uduk enak, Ayam gorengnya crispy dan rasanya enak, saya suka!',
        'created_at' => '2023-04-14 10:15:00',
        'updated_at' => '2023-04-14 10:15:00'
        ]);
        
        Komentar::insert([
            'id_wrg' => 17,
            'id_usr' => 14,
            'isi' => 'Sayuran segar di warung sembako ini membuat masakan saya lebih sehat dan enak.',
            'created_at' => '2023-04-14 10:16:00',
            'updated_at' => '2023-04-14 10:16:00'
        ]);
        
        Komentar::insert([
            'id_wrg' => 18,
            'id_usr' => 16,
            'isi' => 'Kopinya enak dan aromanya menggugah selera, tempatnya juga cozy untuk nongkrong.',
            'created_at' => '2023-04-14 10:17:00',
            'updated_at' => '2023-04-14 10:17:00'
        ]);
        
        Komentar::insert([
            'id_wrg' => 19,
            'id_usr' => 18,
            'isi' => 'Jamu di sini bener-bener membantu saya untuk mengatasi masalah kesehatan saya, recommended!',
            'created_at' => '2023-04-14 10:18:00',
            'updated_at' => '2023-04-14 10:18:00'
        ]);
        
        Komentar::insert([
            'id_wrg' => 20,
            'id_usr' => 20,
            'isi' => 'Internet di warung ini sangat cepat dan stabil, saya bisa menyelesaikan pekerjaan saya dengan mudah.',
            'created_at' => '2023-04-14 10:19:00',
            'updated_at' => '2023-04-14 10:19:00'
        ]);
            
    }
}
