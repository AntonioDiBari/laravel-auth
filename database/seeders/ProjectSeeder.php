<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $project = new Project;

            $project->name = $faker->words(3, true);
            $project->author = $faker->firstNameMale() . " " . $faker->lastName();
            $project->link_github = $faker->url();
            $project->description = $faker->paragraphs(2, true);

            $project->save();
        }
    }
}
