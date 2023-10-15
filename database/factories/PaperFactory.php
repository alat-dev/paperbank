<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paper>
 */
class PaperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        return [
            'title'=> fake() -> sentence(6),
            'year'=>mt_rand(2012,2023),
            // 'subject' => $alphabet[mt_rand(0,25)].$alphabet[mt_rand(0,25)].$alphabet[mt_rand(0,25)].$alphabet[mt_rand(0,25)].str(mt_rand(10,99)),
            'pdf_file' => fake()->word().'.pdf',
            'view_count' => mt_rand(1,100),
            'like_count' => mt_rand(1,100),
            'dislike_count' => mt_rand(1,100),
            'user_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,3),
            'course_id' => mt_rand(1,3)
        ];
    }
}
