<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\County::insert([
            [
                'name' => 'Franklin',
            ], [
                'name' => 'Berkshire',
            ], [
                'name' => 'Grundy',
            ], [
                'name' => 'Glades',
            ]]);

        \App\Models\PostalInfo::insert([
            [
                'zip' => '001340',
                'state' => 'MA',
                'city' => 'Colrain',
                'county_id' => 1,
            ], [
                'zip' => '001343',
                'state' => 'MA',
                'city' => 'Drury',
                'county_id' => 2,
            ], [
                'zip' => '050669',
                'state' => 'IA',
                'city' => 'Reinbeck',
                'county_id' => 3,
            ], [
                'zip' => '001340',
                'state' => 'FL',
                'city' => 'Moore Haven',
                'county_id' => 4,
            ], [
                'zip' => '001340',
                'state' => 'FL',
                'city' => 'Delray Beach',
                'county_id' => 4,
            ]]);
    }
}