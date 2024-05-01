<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\Promo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create([
            'name' => 'Men'
        ]);
        Category::create([
            'name' => 'Women'
        ]);
        Category::create([
            'name' => 'Kids'
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Nike Air Force',
            'price' => 68,
            'description' => "Score major style points with this legendary hoops classic. Crossing hardwood comfort with off-court flair, this AF-1 pairs smooth leather overlays with subtle design details for a nothing-but-net look. Hidden Air units and durable, era-echoing 80's construction add the comfort you know and love.",
            'image_path' => 'nike-air-force.png'
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Nike Air Force',
            'price' => 68,
            'description' => "Comfortable, durable and timeless—it's number 1 for a reason. The classic '80s construction gets a metamorphous refresh inspired by the merging of digital and physical worlds. Jewel-like hardware, holographic accents and a special JDI dubrae add the finishing touch so you can take centre stage in style.",
            'image_path' => 'nike-air-force-women.png'
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Jordan One Take 5',
            'price' => 68,
            'description' => "Accelerate, bank, shoot, score—then repeat. Russell Westbrook's latest shoe is here to assist your speed game so you can stay unstoppable on the break. The lateral eyestay and wraparound toe piece help you feel contained on the court. Underfoot, you get energy-returning Zoom Air cushioning in the forefoot so you can keep sinkin' 'em from the first to the fourth.",
            'image_path' => 'jordan-one-take-5.png'
        ]);
        Promo::create([
            'name' => 'promoanjay',
            'promo' => 10
        ]);
        Promo::create([
            'name' => 'promonyepi',
            'promo' => 30
        ]);
    }
}
