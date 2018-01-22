<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nowDatetime = \Carbon\Carbon::now('	Europe/Kiev')->toDateTimeString();
        $categories = [
            [
                'name' => 'БРЕНД-ДИЗАЙН',
            ],
            [
                'name' => 'ВИДЕО',
            ],
            [
                'name' => 'САЙТЫ',

            ],
            [
                'name' => 'DIGITAL-МАРКЕТИНГ',
            ]
        ];

        foreach ($categories as &$category){
            $category['created_at'] = $nowDatetime;
            $category['updated_at'] = $nowDatetime;
        }

        DB::table('portfolio_categories')->insert($categories);
    }
}
