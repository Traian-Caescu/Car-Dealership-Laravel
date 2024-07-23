<?php

namespace Database\Seeders;


use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         
         
         
         Listing::create([
         'title' => 'Laravel Senior dev',
         'tags' => 'laravel, javascript',
         'company' => 'bob corp',
         'location' => 'manchester',
         'description' => 'wfi9wer iojerif r3m firm fmir fi mm'
		]);
		
		Listing::create([
         'title' => 'Laravelrfr Senior dev',
         'tags' => 'laravelrfr, javascript',
         'company' => 'bobrrr corp',
         'location' => 'manrchester',
         'description' => 'wfi9wer iojerrif r3m firm fmir fi mm'
		]);
    }
}
