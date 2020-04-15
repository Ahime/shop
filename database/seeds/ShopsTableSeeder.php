<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
            	'shopName' => 'Ariel Shop',
	            'country' => "Côte d'ivoire",
	            'town' => 'Abidjan',
	            'domain' => 'Véhicule',
	            'adress' => 'Abidjan - Yopougon',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'shopName' => 'THOD',
	            'country' => "bénin",
	            'town' => 'calavi',
	            'domain' => 'accessoires',
	            'adress' => 'calavi-IITA',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'shopName' => 'HermyKelly-Shop',
	            'country' => "Côte d'ivoire",
	            'town' => 'Abidjan',
	            'domain' => 'Cosmétique',
	            'adress' => 'Abidjan - Koumassi',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'shopName' => 'Fabre Shop',
	            'country' => "Cameroun",
	            'town' => 'yaoundé',
	            'domain' => 'Commece General',
	            'adress' => 'New-York',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            

        ]);
    }
}
