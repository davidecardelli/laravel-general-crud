<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = config('cards');

        foreach ($cards as $card) {
            $new_card = new Card();
            $new_card->fill($card);
            $new_card->save();
        }
    }
}
