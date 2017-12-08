<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert([
            'firstname' => 'John',
            'lastname'  => 'Smith',
            'email'     => 'jsmith@example.com',
        ]);

        DB::table('contatos')->insert([
            'firstname' => 'Tim',
            'lastname'  => 'Jones',
            'email'     => 'tjones@example.com',
        ]);

        DB::table('contatos')->insert([
            'firstname' => 'John',
            'lastname'  => 'Johnson',
            'email'     => 'jjohnson@example.com',
        ]);
    }
}
