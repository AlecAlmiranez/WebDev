<?php

namespace Database\Seeders;

use App\Models\Blog;
use Database\Factories\BlogFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $model = Blog::class;
    public function run(): void
    {
        // DB::table('blogs')->insert([
        //     'title' => 'Trial Title',
        //     'description' => 'Trial Description',
        //     'status' => 1,
        //     'created_at' => date('Y-m-d H:i:s')
        // ]);
            Blog::factory()->count(20)->create();

    }
}
