<?php

namespace Database\Seeders;

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
        $param = [
            'name' => '腕時計',
            'brand' => 'Rolax',
            'image' => '~/coachtech/mock-project1/src/strage/Armani+Mens+Clock.jpg',
            'price' => '15000',
            'user_id' => '1',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'status_id' => '1',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'HDD',
            'brand' => '西芝',
            'image' => '~/coachtech/mock-project1/src/strage/HDD+Hard+Disk.jpg',
            'price' => '5000',
            'user_id' => '2',
            'description' => '高速で信頼性の高いハードディスク',
            'status_id' => '2',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '玉ねぎ3束',
            'brand' => 'なし',
            'image' => '~/coachtech/mock-project1/src/strage/iLoveIMG+d.jpg',
            'price' => '300',
            'user_id' => '3',
            'description' => '新鮮な玉ねぎ3束のセット',
            'status_id' => '3',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '革靴',
            'brand' => '', // 空欄
            'image' => '~/coachtech/mock-project1/src/strage/Leather+Shoes+Product+Photo',
            'price' => '4000',
            'user_id' => '4',
            'description' => 'クラシックなデザインの革靴',
            'status_id' => '4',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ノートPC',
            'brand' => '', // 空欄
            'image' => '~/coachtech/mock-project1/src/strage/Living+Room+Laptop.jpg',
            'price' => '45000',
            'user_id' => '5',
            'description' => '高性能なノートパソコン',
            'status_id' => '1',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'マイク',
            'brand' => 'なし',
            'image' => '~/coachtech/mock-project1/src/strage/Music+Mic+4632231.jpg',
            'price' => '8000',
            'user_id' => '6',
            'description' => '高音質のレコーディング用マイク',
            'status_id' => '2',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ショルダーバッグ',
            'brand' => '', // 空欄
            'image' => '~/coachtech/mock-project1/src/strage/Purse+fashion+pocket.jpg',
            'price' => '3500',
            'user_id' => '7',
            'description' => 'おしゃれなショルダーバッグ',
            'status_id' => '3',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'タンブラー',
            'brand' => 'なし',
            'image' => '~/coachtech/mock-project1/src/strage/Tumbler+souvenir.jpg',
            'price' => '500',
            'user_id' => '8',
            'description' => '使いやすいタンブラー',
            'status_id' => '4',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'コーヒーミル',
            'brand' => 'Starbacks',
            'image' => '~/coachtech/mock-project1/src/strage/Waitress+with+Coffee+Grinder.jpg',
            'price' => '4000',
            'user_id' => '9',
            'description' => '手動のコーヒーミル',
            'status_id' => '1',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'メイクセット',
            'brand' => '', // 空欄
            'image' => '~/coachtech/mock-project1/src/strage/外出メイクアップセット.jpg',
            'price' => '2500',
            'user_id' => '10',
            'description' => '便利なメイクアップセット',
            'status_id' => '2',
        ];
        DB::table('products')->insert($param);
    }
}
