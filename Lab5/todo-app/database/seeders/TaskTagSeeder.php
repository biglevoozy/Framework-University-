<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taskTagData = [
            ['task_id' => 1, 'tag_id' => 1],
            ['task_id' => 1, 'tag_id' => 2],
            ['task_id' => 2, 'tag_id' => 3],
            ['task_id' => 3, 'tag_id' => 1],
            ['task_id' => 3, 'tag_id' => 2],
            ['task_id' => 4, 'tag_id' => 3],
        ];

        DB::table('task_tag')->insert($taskTagData);
    }
}
