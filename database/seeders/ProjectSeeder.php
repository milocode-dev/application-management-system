<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create(['user_id' => 1, 'title' => '3D Game Horror', 'description' => 'School Project']);
        Project::create(['user_id' => 2, 'title' => '2D Design Game Valley', 'description' => 'Project 1 of 1']);
        Project::create(['user_id' => 1, 'title' => '3D Object Blender', 'description' => 'Make Blender Object For Assets']);
    }
}
