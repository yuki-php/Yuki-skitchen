<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        $item_seeds = [
            [
                'name' => 'アンコウ鍋 ',
                'content' => '新鮮アンコウ鍋！(1人前)',
                'price' => '1980',
                'image' => 'ankounabe.jpg' ,
                'category_id' => '3',
            ],
            [
                'name' => '馬刺し ',
                'content' => '新鮮鹿児島産の馬刺し！',
                'price' => '780',
                'image' => 'basashi.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => 'ビール ',
                'content' => '乾杯と言えばコレ！',
                'price' => '600',
                'image' => 'beer.jpg' ,
                'category_id' => '4',
            ],
            [
                'name' => 'フライドポテト ',
                'content' => 'みんな大好きフライドポテト！',
                'price' => '500',
                'image' => 'friedpotato.jpg' ,
                'category_id' => '5',
            ],
            [
                'name' => 'イカ刺し ',
                'content' => '新鮮イカ刺し！',
                'price' => '650',
                'image' => 'ika.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => '生牡蠣 ',
                'content' => '新鮮！獲れたて生牡蠣(2個)！',
                'price' => '980',
                'image' => 'kaki.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => 'ズワイガニ ',
                'content' => '新鮮★北陸産ズワイガニ！',
                'price' => '1650',
                'image' => 'kani.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => '唐揚げ ',
                'content' => '定番！みんな大好き唐揚げ★',
                'price' => '650',
                'image' => 'karaage.jpg' ,
                'category_id' => '5',
            ],
            [
                'name' => 'おまかせ串盛 ',
                'content' => 'おまかせ串盛！(5本)',
                'price' => '800',
                'image' => 'kusimori.jpg' ,
                'category_id' => '1',
            ],
            [
                'name' => 'マグロ ',
                'content' => '刺身の王様！青森産本マグロ★',
                'price' => '950',
                'image' => 'maguro.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => 'もつ鍋 ',
                'content' => 'プリプリ本格もつ鍋！',
                'price' => '1200',
                'image' => 'motsunabe.jpg' ,
                'category_id' => '3',
            ],
            [
                'name' => 'ねぎま ',
                'content' => '大きなねぎま！(1本)',
                'price' => '160',
                'image' => 'negima.jpg' ,
                'category_id' => '1',
            ],
            [
                'name' => '日本酒 ',
                'content' => ' 新潟大吟醸! (1合)',
                'price' => '600',
                'image' => 'nihounsyu.jpg' ,
                'category_id' => '5',
            ],
            [
                'name' => 'おでん ',
                'content' => 'アツアツ！静岡おでん(1人前)',
                'price' => '780',
                'image' => 'oden.jpg' ,
                'category_id' => '3',
            ],
            [
                'name' => 'お造り ',
                'content' => '厳選！お刺身のお造り(4人前)',
                'price' => '1600',
                'image' => 'otsukuri.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => '砂肝 ',
                'content' => 'デカッ!最高の砂肝(1本)',
                'price' => '150',
                'image' => 'sunagimo.jpg' ,
                'category_id' => '1',
            ],
            [
                'name' => '真鯛 ',
                'content' => '新鮮！近海の真鯛',
                'price' => '650',
                'image' => 'tai.jpg' ,
                'category_id' => '2',
            ],
            [
                'name' => '手羽先 ',
                'content' => '名古屋のグルメ！ジューシー手羽先(1本)',
                'price' => '240',
                'image' => 'tebasaki.jpg' ,
                'category_id' => '5',
            ],
            [
                'name' => 'つくね ',
                'content' => '軟骨入り！大玉つくね(1本)',
                'price' => '200',
                'image' => 'tukune.jpg' ,
                'category_id' => '1',
            ],
            [
                'name' => 'チューハイ ',
                'content' => '最高のチューハイ！',
                'price' => '550',
                'image' => 'tyu-hai.jpg' ,
                'category_id' => '4',
            ],
            [
                'name' => '梅酒 ',
                'content' => '紀州のとれたておいしい梅酒★',
                'price' => '600',
                'image' => 'umesyu.jpg' ,
                'category_id' => '4',
            ],
            [
                'name' => 'ワイン ',
                'content' => '本格！獲れたて葡萄の赤ワイン',
                'price' => '700',
                'image' => 'wine.jpg' ,
                'category_id' => '4',
            ],
            
        ];
        foreach($item_seeds as $item) {
            DB::table('items')->insert($item);
        }
    }
    
}
