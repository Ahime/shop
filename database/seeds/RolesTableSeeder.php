<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    	DB::table('roles')->insert([
        	['role' => "Acheteur", 'name' => "buyer"],
        	['role' => "Vendeur", 'name' => "seller"],
        	['role' => "Sécrétaire", 'name' => "secretary"],
        	['role' => "Livreur", 'name' => "deliveryMan"],
        	['role' => "Administrateur", 'name' => "admin"],
        	['role' => "Super Administrateur", 'name' => "superAdmin"],
        ]);
    }
}
