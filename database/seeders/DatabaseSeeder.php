<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            "title" => "Title 1",
            "tags" => "Hello, Title, Tag",
            "companyName" => "yourCompany",
            "location" => "Boston, MA",
            "email" => "em1@email.com",
            "website" => "h t t p s : //",
            "description" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum"
        ]);
        
        Listing::create([
            "title" => "Title 2",
            "tags" => "JS, HTML, CSS",
            "companyName" => "your_Company",
            "location" => "Brooklyn, NY",
            "email" => "em2@email.com",
            "website" => "h t t p s : //",
            "description" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum"
        ]);
    }
}
