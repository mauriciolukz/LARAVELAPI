<?php

use Illuminate\Database\Seeder;

class SY01400Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SY01400')->insert([
            'USERID' => 'sa',
            'USERNAME' => '$2y$12$amYUEa99oG2XsjODdGDYKe/KK6aGBJe5ZNX862YXLWCEw08tLae3q',
            'PASSWORD' => '$2y$12$amYUEa99oG2XsjODdGDYKe/KK6aGBJe5ZNX862YXLWCEw08tLae3q'
        ]);
    }
}
