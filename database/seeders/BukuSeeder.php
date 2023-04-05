<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'kode_buku' => 'BKN01',
            'judul' => 'Belajar Laravel',
            'pengarang' => 'Andika Ainur Wibowo',
            'jenis_buku' => 'Buku Umum',
            'harga' => '102000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 'BKN02',
            'judul' => 'Belajar Database',
            'pengarang' => 'Hakan Alif',
            'jenis_buku' => 'Buku Umum',
            'harga' => '85000',
            'qty' => '20',
        ],
        [
            'kode_buku' => 'BKN03',
            'judul' => 'Dari Langit ke Bumi',
            'pengarang' => 'Alvian Nur',
            'jenis_buku' => 'Novel',
            'harga' => '75000',
            'qty' => '35',
        ],
        [
            'kode_buku' => 'BKN04',
            'judul' => '7 Mata Air',
            'pengarang' => 'Ega Fernanda',
            'jenis_buku' => 'Novel',
            'harga' => '80000',
            'qty' => '60',
        ],
        [
            'kode_buku' => 'BKN05',
            'judul' => 'Belajar Membaca',
            'pengarang' => 'Bagus Dwi',
            'jenis_buku' => 'Buku Umum',
            'harga' => '79000',
            'qty' => '35',
        ],
        [
            'kode_buku' => 'BKN06',
            'judul' => 'Ayat-ayat Cinta',
            'pengarang' => 'Andhito',
            'jenis_buku' => 'Novel',
            'harga' => '95000',
            'qty' => '65',
        ],
        [
            'kode_buku' => 'BKN07',
            'judul' => 'Dilan',
            'pengarang' => 'Fikri',
            'jenis_buku' => 'Novel',
            'harga' => '105000',
            'qty' => '45',
        ],
        [
            'kode_buku' => 'BKN08',
            'judul' => 'Bumi Manusia',
            'pengarang' => 'Didin',
            'jenis_buku' => 'Novel',
            'harga' => '76000',
            'qty' => '65',
        ],
        [
            'kode_buku' => 'BKN09',
            'judul' => 'Cantik Itu Luka',
            'pengarang' => 'Denti',
            'jenis_buku' => 'Novel',
            'harga' => '120000',
            'qty' => '75',
        ],
        [
            'kode_buku' => 'BKN10',
            'judul' => 'Rindu',
            'pengarang' => 'Endar',
            'jenis_buku' => 'Novel',
            'harga' => '55000',
            'qty' => '20',
        ],
        [
            'kode_buku' => 'BKN11',
            'judul' => 'Lelaki Harimau',
            'pengarang' => 'Farhan',
            'jenis_buku' => 'Novel',
            'harga' => '110000',
            'qty' => '85',
        ],
        [
            'kode_buku' => 'BKN12',
            'judul' => 'Twenty Four Eyes',
            'pengarang' => 'Faiz',
            'jenis_buku' => 'Novel',
            'harga' => '78000',
            'qty' => '75',
        ],
        [
            'kode_buku' => 'BKN13',
            'judul' => 'Little Man',
            'pengarang' => 'Ibnu',
            'jenis_buku' => 'Novel',
            'harga' => '120000',
            'qty' => '65',
        ],
        [
            'kode_buku' => 'BKN14',
            'judul' => 'Pintu Harmonika',
            'pengarang' => 'Elang',
            'jenis_buku' => 'Novel',
            'harga' => '45000',
            'qty' => '45',
        ],
        [
            'kode_buku' => 'BKN15',
            'judul' => 'Negeri 5 Menara',
            'pengarang' => 'Yasmine',
            'jenis_buku' => 'Novel',
            'harga' => '90000',
            'qty' => '55',
        ],
        [
            'kode_buku' => 'BKN16',
            'judul' => 'Gadis Minimarket',
            'pengarang' => 'Zahra',
            'jenis_buku' => 'Novel',
            'harga' => '97000',
            'qty' => '56',
        ],
        [
            'kode_buku' => 'BKN17',
            'judul' => 'Wingit',
            'pengarang' => 'Akbar',
            'jenis_buku' => 'Novel',
            'harga' => '91000',
            'qty' => '45',
        ],
        [
            'kode_buku' => 'BKN18',
            'judul' => 'Belajar Bahasa Python',
            'pengarang' => 'Naresh',
            'jenis_buku' => 'Buku Umum',
            'harga' => '80000',
            'qty' => '55',
        ],
        [
            'kode_buku' => 'BKN19',
            'judul' => 'Belajar Bahasa Java',
            'pengarang' => 'Dzaka',
            'jenis_buku' => 'Buku Umum',
            'harga' => '91000',
            'qty' => '44',
        ],
        [
            'kode_buku' => 'BKN20',
            'judul' => 'Belajar Bahasa C++',
            'pengarang' => 'Azzam',
            'jenis_buku' => 'Buku Umum',
            'harga' => '95000',
            'qty' => '77',
        ],];
        DB::table('bukus')->insert($data);
    }
}
