<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'thangtx3',
            'email' => 'thangtx3@gmail.com.vn',
            'password' => bcrypt('Chjp2018*+'),
            'cellphone' => '359030028',
            'telephone' => '9123'
        ]);
    }
}
