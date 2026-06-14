<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Perkembangan Kurikulum di Indonesia 2015-2025',
            'author' => 'Kemendikbud',
            'category' => 'Kurikulum',
            'content' => 'Dalam satu dekade terakhir Indonesia mengalami transformasi kurikulum dari Kurikulum 2013 menuju Kurikulum Merdeka.'
        ]);

        Article::create([
            'title' => 'Transformasi Pendidikan Saat Pandemi COVID-19',
            'author' => 'Admin EduLearn',
            'category' => 'Pendidikan Digital',
            'content' => 'Pandemi COVID-19 mempercepat penggunaan teknologi dalam proses pembelajaran.'
        ]);

        Article::create([
            'title' => 'Peran Artificial Intelligence dalam Pendidikan',
            'author' => 'Admin EduLearn',
            'category' => 'Teknologi Pendidikan',
            'content' => 'AI mulai digunakan sebagai tutor virtual dan asisten pembelajaran.'
        ]);
    }
}