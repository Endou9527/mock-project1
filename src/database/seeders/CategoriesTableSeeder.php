<?php

namespace Database\Seeders;

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
        $name = [
            'name' => 'ファッション',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => '家電',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'インテリア',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'レディース',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'メンズ',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'コスメ',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => '本',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'ゲーム',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'スポーツ',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'キッチン',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'ハンドメイド',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'アクセサリー',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'おもちゃ',
        ];
        DB::table('categories')->insert($name);
        $name = [
            'name' => 'ベビー・キッズ',
        ];
        DB::table('categories')->insert($name);
    }
}
