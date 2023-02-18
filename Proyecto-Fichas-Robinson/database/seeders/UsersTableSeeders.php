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
     //   User::create(['nombre'=>'robinson2','apellido'=>'rios','email'=>'robinson2@gmail.com','password'=> Hash::Make('12345')]);
    }
}
