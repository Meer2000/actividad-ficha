<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create(['name'=>'robinson2','email'=>'robinson2@gmail.com','password'=> Hash::Make('12345')]);
          User::create(['name'=>'robinson','email'=>'robinson@gmail.com','password'=> Hash::Make('12345')]);

    }

}
