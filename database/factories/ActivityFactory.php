<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tevekenyseg_nev' => fake()->unique()->randomElement([
                	'kerékpárral jöttem iskolába', 
                	'rollerrel jöttem iskolába', 
                	'10 km-t gyalogoltam buszozás helyett', 
                	'ültettem fát', 
                	'ültettem virágot', 
                	'ültettem egyéb növényt', 
                	'kevesebb vizet használtam a fürdéshez', 
                	'összeszedtem a szemetet egy közterületen, erdőben, stb', 
                	'tartós szatyorba vásároltam, nem nylonba', 
                	'nem használtam egyszer használatos műanyagot', 
                	'tartós csomagolású terméket vásároltam – pl üvegbe vettem a tejet, nem használtam pet palackot',  
                	'környezetbarát csomagolású terméket vásároltam', 
                	'kevesebb húst ettem a héten', 
                	'ökológiai gazdaságból származó élelmiszert vettem', 
                	'kirándultam, szabadban töltöttem időt a héten', 
                	'kevesebb ruhát/terméket vásároltam a héten, hogy fenntarthatóbb legyen a környeztünk!', 
                	'önkénteskedtem a Greenpeace-nél, vagy más zöld szervezetnél', 

            ]),
            'pontszam' => fake()->numberBetween(5, 100),
        ];
    }
}
