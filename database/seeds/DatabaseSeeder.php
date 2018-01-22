<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AuthTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PortfolioCategoriesSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(PortfolioBlocksSeeder::class);

        Model::reguard();
    }
}
