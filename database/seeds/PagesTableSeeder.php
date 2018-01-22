<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nowDatetime = \Carbon\Carbon::now('	Europe/Kiev')->toDateTimeString();
        $prefix = env('APP_NAME') . ' - ';
        $pages = [
            [
                'name' => $prefix . 'Главная',
                'slug' => 'index'
            ],
            [
                'name' => $prefix . 'Кто мы',
                'slug' => 'company'
            ],
            [
                'name' => $prefix . 'Наши работы',
                'slug' => 'portfolio'
            ],
            [
                'name' => $prefix . 'Контакты',
                'slug' => 'contacts'
            ]
        ];

        foreach ($pages as &$page){
            $page['created_at'] = $nowDatetime;
            $page['updated_at'] = $nowDatetime;
        }

        DB::table('pages')->insert($pages);
    }
}
