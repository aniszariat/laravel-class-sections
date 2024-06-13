<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /**
         * ! instead of 'insert' use 'create' to insert updated_at and created_at fields
         */


        Section::create([
            'name' => 'math science',
            'slug' => Str::slug('math science'),
            'description' => "Cette section offre une solide formation en mathématiques et sciences naturelles, permettant aux étudiants de développer des compétences analytiques et une compréhension approfondie des concepts scientifiques. Le programme couvre une variété de sujets, allant de l'algèbre et la géométrie à la biologie et la chimie. Les laboratoires modernes et les expériences pratiques enrichissent l'apprentissage théorique, préparant les élèves à des études supérieures exigeantes."
        ]);
        Section::create([
            'name' => 'math physique',
            'slug' => Str::slug('math physique'),
            'description' => "La section Mathématiques et Physique est conçue pour les étudiants passionnés par les sciences exactes. Elle met l'accent sur les théories et les applications mathématiques ainsi que sur les principes fondamentaux de la physique. Les cours incluent des travaux pratiques en laboratoire pour illustrer les concepts physiques, favorisant une compréhension concrète et intuitive des phénomènes naturels."
        ]);
        Section::create([
            'name' => 'science informatique',
            'slug' => Str::slug('science informatique'),
            'description' => "Cette section se concentre sur les fondamentaux de l'informatique, incluant la programmation, les systèmes d'information et les réseaux. Les étudiants apprennent à coder dans plusieurs langages et à développer des applications logicielles. Les cours pratiques et les projets collaboratifs encouragent l'innovation et la résolution de problèmes, préparant les élèves aux carrières dans le domaine technologique."
        ]);

        /* DB::table('sections')->insert([


            [
                'name' => 'math science',
                'slug' => Str::slug('math science'),
                'description' => "Cette section offre une solide formation en mathématiques et sciences naturelles, permettant aux étudiants de développer des compétences analytiques et une compréhension approfondie des concepts scientifiques. Le programme couvre une variété de sujets, allant de l'algèbre et la géométrie à la biologie et la chimie. Les laboratoires modernes et les expériences pratiques enrichissent l'apprentissage théorique, préparant les élèves à des études supérieures exigeantes."
            ],
            [
                'name' => 'math physique',
                'slug' => Str::slug('math physique'),
                'description' => "La section Mathématiques et Physique est conçue pour les étudiants passionnés par les sciences exactes. Elle met l'accent sur les théories et les applications mathématiques ainsi que sur les principes fondamentaux de la physique. Les cours incluent des travaux pratiques en laboratoire pour illustrer les concepts physiques, favorisant une compréhension concrète et intuitive des phénomènes naturels."
            ],
            [
                'name' => 'science informatique',
                'slug' => Str::slug('science informatique'),
                'description' => "Cette section se concentre sur les fondamentaux de l'informatique, incluant la programmation, les systèmes d'information et les réseaux. Les étudiants apprennent à coder dans plusieurs langages et à développer des applications logicielles. Les cours pratiques et les projets collaboratifs encouragent l'innovation et la résolution de problèmes, préparant les élèves aux carrières dans le domaine technologique."
            ],
        ]); */
    }
}
