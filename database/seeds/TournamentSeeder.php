<?php

use App\Tournament;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fights')->delete();
        DB::table('teams')->delete();
        DB::table('tournaments')->delete();
        DB::table('countries')->delete();

        // factory(App\Country::class,2)->create()->each(function($countries){
        //     $countries->tournament()->saveMany(
        //         factory(App\Tournament::class,rand(1,2))->make()
        //     );
        // });

        // factory(App\Country::class,2)->create()->each(function($countries){
        //     $countries->tournament()->saveMany(
        //         factory(App\Tournament::class,rand(1,2))->make()
        //     )->each(function($match){
        //         $match->match()->saveMany(
        //             factory(App\Fight::class,rand(1,2))->make()
        //         );
        //     });
        // });

        // factory(App\Country::class,2)->create()->each(function($countries){
        //     $countries->tournament()->saveMany(
        //         factory(App\Tournament::class,rand(1,2))->make()
        //     )->each(function($team){
        //         $team->team()->saveMany(
        //             factory(App\Team::class,rand(1,2))->make()
        //         )->each(function($match){
        //                     $match->match()->saveMany(
        //                         factory(App\Fight::class,rand(1,2))->make()
        //                     );
        //         });
        //     });
        // });

        factory(App\Team::class,2)->create();

        factory(App\Country::class,2)->create()->each(function($countries){
            $countries->tournament()->saveMany(
                factory(App\Tournament::class,rand(1,2))->make()
            )->each(function($match){
                $match->match()->saveMany(
                    factory(App\Fight::class,rand(1,2))->make()
                );
            });
        });

    }
}
