<?php

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Task::factory(10)->create();
    }
}

