<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データのクリア
        DB::table('products')->truncate();
        
        $param= [
            'name' => 'でっちようかん',
            'description' => '若狭小浜の名物です。',
            'price' => 500 ,
            'category_id' => 1,
            'img_url' => 'img/items/dechiyoukan.jpg',
        ];
        DB::table('products')->insert($param);

        $param= [
            'name' => '葛ようかん',
            'description' => '葛を使ったようかんです。',
            'price' => 500 ,
            'category_id' => 1,
            'img_url' => 'img/items/kuzuyokan.jpg',
        ];
        DB::table('products')->insert($param);

    }
}
