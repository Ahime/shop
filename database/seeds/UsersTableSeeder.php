<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
        	[
        		'username' => "AHIME SHOPY",
        		'sex' => "M",
        		'birthday' => '2000/03/02',
        		'phone' => "96547841",
        		'bankingAccount' => "uba6546546534545",
        		'email' => "ahime@ahime.com",
        		'password' => bcrypt('adminahime'),
        		'urlImage' => "storage/img/admin.png",
        		'confirmationToken' => "",
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'username' => "DEGLA Fabrice",
        		'sex' => "M",
        		'birthday' => '1998/03/08',
        		'phone' => "67012331",
        		'bankingAccount' => "uba746546534545",
        		'email' => "fabiodegla15@gmail.com",
        		'password' => bcrypt('adeline@1995'),
        		'urlImage' => "storage/img/fabio.png",
        		'confirmationToken' => "",
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        ]);
    }
}
