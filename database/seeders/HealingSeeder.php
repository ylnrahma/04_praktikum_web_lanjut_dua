<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'nama tempat' => ' Santerra de Laponte',
            'alamat' => 'Jl. Truno joyo Jurangrejo, Pandesari, Kec. Pujon, Kabupaten Malang',
            'keterangan' => 'belum',
            'harga' => 30
        ],
        [
            'nama tempat' => 'Cafe Sawah Pujon Kidul',
            'alamat' => 'Desa Wisata, Pujon Kidul,Kec. Pujon,Kabupaten Malang',
            'keterangan' => 'sudah',
            'harga' => 15
        ],
        [
            'nama tempat' => 'Coban Putri',
            'alamat' => 'Jalur Lkr.Bar., Oro-Oro Ombo, Kec. Batu, Kota Batu. Jawa Timur',
            'keterangan' => 'belum',
            'harga' => 10
        ],
        [
            'nama tempat' => 'Kanvil Dau',
            'alamat' => 'Jl.Raya Tegalweru, Krajan, Junreju,Kec. Dau,Kabupaten Malang',
            'keterangan' => 'sudah',
            'harga' => 300
        ],
        [
            'nama tempat' => 'Seblak Neng Geulis',
            'alamat' => 'Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur',
            'keterangan' => 'sudah',
            'harga' => 25
        ]];
        DB::table('healing')->insert($data);
    }
}

