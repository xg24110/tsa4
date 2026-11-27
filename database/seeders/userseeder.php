<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\sysuser;

class userseeder extends Seeder
{
    public function run(): void
    {
        sysuser::create(['username' => 'user1', 'password' => Hash::make('user123')]);
    }
}