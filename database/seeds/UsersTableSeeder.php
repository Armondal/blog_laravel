<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Arnab Mondal',
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin12345')
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MD. Raju ',
            'username' => 'author',
            'email' => 'author@email.com',
            'password' => bcrypt('author12345')
        ]);
    }
}
