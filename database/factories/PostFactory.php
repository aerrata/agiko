<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $content = '<h4 id="lorem-ipsum-dolor-">Lorem, ipsum dolor.</h4>
        <p>Until now, trying to style an article, document, or blog post with Tailwind has been a tedious task that required a keen eye for typography and a lot of complex custom CSS.</p>
        <p>By default, Tailwind removes all of the default browser styling from paragraphs, headings, lists and more. This ends up being really useful for building application UIs because you spend less time undoing user-agent styles, but when you <em>really are</em> just trying to style some content that came from a rich-text editor in a CMS or a markdown file, it can be surprising and unintuitive.</p>
        <p>We get lots of complaints about it actually, with people regularly asking us things like:</p>
        <blockquote>
        <p>Why is Tailwind removing the default styles on my <code>h1</code> elements? How do I disable this? What do you mean I lose all the other base styles too?</p>
        </blockquote>';

        $title = fake()->sentence();

        return [
            'meta' => [
                'title' => $title,
                'description' => fake()->sentence(),
                'slug' => Str::slug($title, '-'),
                'content' => $content,
                'type' => fake()->randomElement(['article', 'event']),
                'category' => null,
                'image_url' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600',
                'author_id' => User::pluck('id')->random(),
                'published' => true
            ],
        ];
    }
}
