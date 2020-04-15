<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            	'label' => 'HP',
	            'features' => "ph corI5",
	            'description' => 'new ',
	            'price' => 200000,
	            'quantity' => 4,
	            'urlImage' => 'storage/img/hp.jpg',
	            'shop_id' => 2,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'Antenne parabolique',
	            'features' => '',
	            'description' => 'Antenne de canal+ ',
	            'price' => 25000,
	            'quantity' => 3,
	            'urlImage' => 'storage/img/antenne.jpg',
	            'shop_id' => 1,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'Télévision',
	            'features' => "Télé plasma",
	            'description' => 'Une tele de dernière generation',
	            'price' => 250000,
	            'quantity' => 2,
	            'urlImage' => 'storage/img/tele.jpg',
	            'shop_id' => 4,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'Patalon Jean',
	            'features' => "Destroy",
	            'description' => '',
	            'price' => 5000,
	            'quantity' => '12',
	            'urlImage' => 'storage/img/dest2.jpg',
	            'shop_id' => 3,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'volvo',
	            'features' => "volvol de petite taille, moteur diesel, new",
	            'description' => 'Cette voiture est dingue. Volvo de france et qui va rendre la distance très courte',
	            'price' => 20000000,
	            'quantity' => 2,
	            'urlImage' => 'storage/img/volvo1.jpg',
	            'shop_id' => 1,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'Honda',
	            'features' => "Honda de petite taille, moteur diesel, new",
	            'description' => 'Cette voiture est super dingue. Honda de Chine et qui va rendre la distance plus courte',
	            'price' => 25000000,
	            'quantity' => 1,
	            'urlImage' => 'storage/img/honda.jpg',
	            'shop_id' => 1,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'Range-Roger',
	            'features' => "Range-Roger de couleur noir, moteur diesel, new",
	            'description' => 'Cette voiture est super dingue. Range-Roger des USA',
	            'price' => 35000000,
	            'quantity' => 1,
	            'urlImage' => 'storage/img/Range-Rover-Evoque-Face.jpg',
	            'shop_id' => 1,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ],
            [
            	'label' => 'Range-Roger',
	            'features' => "Range-Roger de couleur rouge, moteur diesel, new",
	            'description' => 'Cette voiture est dingue. Range-Roger de Chine',
	            'price' => 35000000,
	            'quantity' => 1,
	            'urlImage' => 'storage/img/rang-rover.jpg',
	            'shop_id' => 1,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]

        ]);
    }
}
	 	 	 	 	 	 