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
        		'bankingAccount' => "ecobank746546534545",
        		'email' => "fabiodegla15@gmail.com",
        		'password' => bcrypt('adeline@1995'),
        		'urlImage' => "storage/img/fabio.png",
        		'confirmationToken' => "",
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
            [
                'username' => "SODEGLA Karim",
                'sex' => "M",
                'birthday' => '1995/10/08',
                'phone' => "61300817",
                'bankingAccount' => "uba746546534545",
                'email' => "sodeglakarim@gmail.com",
                'password' => bcrypt('sokamsokam'),
                'urlImage' => "storage/img/fabio.png",
                'confirmationToken' => "",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => "ALLOI GBODJA Méryvane",
                'sex' => "M",
                'birthday' => '1995/03/01',
                'phone' => "66022331",
                'bankingAccount' => "boa746546534545",
                'email' => "mery@gmail.com",
                'password' => bcrypt('meryalloi1995'),
                'urlImage' => "storage/img/fabio.png",
                'confirmationToken' => "",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => "SODEGLA Félicien",
                'sex' => "M",
                'birthday' => '1998/10/25',
                'phone' => "95784513",
                'bankingAccount' => "ecobank746546534545",
                'email' => "felicien@gmail.com",
                'password' => bcrypt('12345678'),
                'urlImage' => "storage/img/fabio.png",
                'confirmationToken' => "",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => "DEGLA Albéric",
                'sex' => "M",
                'birthday' => '1998/11/18',
                'phone' => "67458124",
                'bankingAccount' => "boa746546534545",
                'email' => "eltchouke@gmail.com",
                'password' => bcrypt('21212121'),
                'urlImage' => "storage/img/fabio.png",
                'confirmationToken' => "",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

    }
}
