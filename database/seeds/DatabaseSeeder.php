<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ProdutoTableSeeder');
    }
}


class ProdutoTableSeeder extends Seeder
{
    public function run()
    {

        
        DB::insert('insert into produtos 
        (nome, preco, descricao, fornecedor, data_entrada, cod_barras, nfce_code, quantidade, fornecedor_id) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        ['Iphone X NCS', 3590.54, 'Iphone X Native Code Standard, 32 GB, 8 RAM, IOS 8.6, Black piano', 'Apple Brasil','2019-05-17', 
        '2700023', '415054-54', '56', '1']);

        DB::insert('insert into produtos 
        (nome, preco, descricao, fornecedor, data_entrada, cod_barras, nfce_code, quantidade, fornecedor_id) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        ['Motorola One ', 2799.99, 'Motorola One Standard, 16 GB, 8 RAM, Android KitKat', 'Kernel Imports','2019-05-17', 
        '2700041', '415054-62', '75', '2']);

        DB::insert('insert into produtos 
        (nome, preco, descricao, fornecedor, data_entrada, cod_barras, nfce_code, quantidade, fornecedor_id) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        ['HeadSet JBL ', 567.59,'HeadSet Preto JBL T530 100MW com capa protetora', 'Kernel Imports','2019-05-17', 
        '2700040', '415054-62', '10', '2']);
        

        // $this->call(UsersTableSeeder::class);
    }
}