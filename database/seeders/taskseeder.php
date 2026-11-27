<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\task;

class taskseeder extends Seeder
{
    public function run(): void
    {
        task::create(['tn' => 'clean the floor', 'is_archived' => false]);
        task::create(['tn' => 'cook lunch', 'is_archived' => false]);
        task::create(['tn' => 'take a nap', 'is_archived' => false]);
    }
}