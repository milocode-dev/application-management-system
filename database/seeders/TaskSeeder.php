<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(['project_id' => 1, 'title' => 'Slicing UI Asset Blender', 'description' => 'Slicing Asset for Experience', 'due_date' => '2026-07-25', 'attachment' => null]);
        Task::create(['project_id' => 2, 'title' => 'Masking Object', 'description' => 'Making reason for 2D', 'due_date' => '2026-07-15', 'attachment' => null]);
        Task::create(['project_id' => 1, 'title' => 'AI Management On Blender', 'description' => 'Object Asset for Real Animation', 'due_date' => '2026-07-30', 'attachment' => null]);
    }
}
