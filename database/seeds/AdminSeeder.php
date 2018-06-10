<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create(['login' => 'admin', 'password' => Hash::make('123'), 'email' => 'katyabasova97@gmail.com']);
    }
}
