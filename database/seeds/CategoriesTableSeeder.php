<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $param = [
            'name' =>'季節限定'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' =>'人気商品'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' =>'ロールケーキ'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' =>'焼き菓子'
        ];
        DB::table('categories')->insert($param);
        
        $param = [
            'name' =>'慶弔菓子'
        ];
        DB::table('categories')->insert($param);

    }
}
