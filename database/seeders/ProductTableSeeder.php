<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Cola Cola 2 Litros',
            'description' => 'Refrigerante gaseficado sabor cola',
            'price' => 10.50,
            'category' => 'Bebida',
            'stock' => 50,
            'image_path' => 'https://brf.file.force.com/servlet/servlet.ImageServer?id=015U600000027Gj&oid=00D410000012TJa&lastMod=1703778094000'
        ]);
                DB::table('products')->insert([
            'name' => 'Pepsi 2 Litros',
            'description' => 'Refrigerante gaseficado sabor cola',
            'price' => 10.50,
            'category' => 'Bebida',
            'stock' => 40,
            'image_path' => 'https://superprix.vteximg.com.br/arquivos/ids/203553-600-600/d416af9646f567ce75a1006891b73cdf_refrigerante-pepsi-2l_lett_1.jpg?v=637695819528930000'
        ]);
                DB::table('products')->insert([
            'name' => 'Guarana Antartica 2 Litros',
            'description' => 'Refrigerante gaseficado sabor guarana',
            'price' => 8.50,
            'category' => 'Bebida',
            'stock' => 75,
            'image_path' => 'https://d21wiczbqxib04.cloudfront.net/Oci_1XgLTJvn5VBmK7jQ3-jVbY4=/fit-in/600x0/filters:fill(FFFFFF):background_color(white)/https://produtos-osuper.s3.sa-east-1.amazonaws.com/5240.jpg'
        ]);
                DB::table('products')->insert([
            'name' => 'Agua Crystal 2 Litros',
            'description' => 'Agua mineral natural',
            'price' => 5.99,
            'category' => 'Bebida',
            'stock' => 100,
            'image_path' => 'https://www.santoremedio.com.br/media/produtos/139359.jpg'
        ]);
    }
}
