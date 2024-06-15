<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game = new Game;
        $game->tittle = 'Mario Oddyssey';
        $game->developer = 'Nintendo';
        $game->releasedate = '2017-10-27';
        $game->category_id = 1;
        $game->user_id = 1;
        $game->price = 1;
        $game->genre = '3D Adventure';
        $game->description = 'lorem impsun dolor sit amet';
        $game->save();

        $game = new Game;
        $game->tittle = 'Resident Evil 4';
        $game->developer = 'Capcom';
        $game->releasedate = '2020-04-19';
        $game->category_id = 2;
        $game->user_id = 1;
        $game->price = 80;
        $game->genre = 'Action';
        $game->description = 'lorem impsun dolor sit amet';
        $game->save();

        $game = new Game;
        $game->tittle = 'valhalla';
        $game->developer = 'Capcom';
        $game->releasedate = '2014-10-15';
        $game->category_id = 3;
        $game->user_id = 1;
        $game->price = 60;
        $game->genre = 'Action';
        $game->description = 'lorem impsun dolor sit amet';
        $game->save();

        $game = new Game;
        $game->tittle = 'Red Dead Redemptions';
        $game->developer = 'Ubisoft';
        $game->releasedate = '2017-10-27';
        $game->category_id = 4;
        $game->user_id = 1;
        $game->price = 80;
        $game->genre = 'Action Adventure';
        $game->description = 'lorem impsun dolor sit amet';
        $game->save();
    }
}
