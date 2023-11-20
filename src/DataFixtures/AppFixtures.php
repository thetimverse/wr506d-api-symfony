<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));

        $actors = $faker->actors($gender = null, $count = 190, $duplicates = false);
        foreach ($actors as $item){
            $fullname = $item; // Christian Bale
            $fullnameExploded = explode(' ', $fullname);

            $firstname = $fullnameExploded[0];
            $lastname = $fullnameExploded[1];

            $actor = new Actor();
            $actor->setFirstname($firstname);
            $actor->setLastname($lastname);
            $actor->setDob($faker->dateTimeThisCentury());
            $actor->setCreatedAt(new \DateTimeImmutable());

            $createdActors[] = $actor;

            $manager->persist($actor);
        }

#        $createdAt = \DateTimeImmutable::createFromMutable($faker->dateTimeThisDecade());
 #       $dob = $faker->dateTimeThisCentury();

        $faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));
        $movies = $faker->movies(300);
        foreach ($movies as $item) {
             $movie = new Movie();
             $movie->setTitle($item);

             shuffle($createdActors);
             $createdActorsSliced = array_slice($createdActors, 0, 4);
             foreach ($createdActorsSliced as $actor) {
                 $movie->addActor($actor);
             }

             $manager->persist($movie);
        }

        $manager->flush();
    }
}
