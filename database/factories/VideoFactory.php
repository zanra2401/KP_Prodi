<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideoFactory extends Factory
{
    protected $model = Video::class;

    public function definition()
    {
        $videoLinks = [
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
            "https://www.youtube.com/embed/tgbNymZ7vqY",
        ];

        return [
            'id_video'    => (string) Str::uuid(),
            'link_video'  => $this->faker->randomElement($videoLinks),
            'title_video' => $this->faker->sentence(3),
        ];
    }
}
