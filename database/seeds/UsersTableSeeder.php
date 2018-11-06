<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ruben = new \App\User();
        $ruben->name = "Ruben Schwan";
        $ruben->email = "ruben.schwan@yahoo.com";
        $ruben->password = bcrypt('password');
        $ruben->save();

        $janosch = new \App\User();
        $janosch->name = "Janosch van Kann";
        $janosch->email = "janosch@vankann.com";
        $janosch->password = bcrypt('password');
        $janosch->save();

        $sunny = new \App\User();
        $sunny->name = "Sunny";
        $sunny->email = "sunny@mail.de";
        $sunny->password = bcrypt('baeservice24');
        $sunny->save();
    }
}
