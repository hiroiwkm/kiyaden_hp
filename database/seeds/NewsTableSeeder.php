<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();

        $param = [
            'title' => 'HP作りました',
            'content' => 'ホームページを作りました。'
        ];
        DB::table('news')->insert($param);

        $param = [
            'title' => '通信販売始まりました',
            'content' => 'ネットでご注文いただけます。'
        ];
        
        DB::table('news')->insert($param);
        $param = [
            'title' => '季節限定商品です',
            'content' => '夏季限定で販売中です'
        ];

    }
    
}
