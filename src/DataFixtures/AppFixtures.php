<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Entity\Category;
use App\Entity\MediaObject;
use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $placeholderPoster = new MediaObject();
        $placeholderPoster->setfilePath('65a53b1f9151f_movie-3.jpg');
        $manager->persist($placeholderPoster);

        $placeholderActor = new MediaObject();
        $placeholderActor->setfilePath('65a53fd8762d9_qkOP1LnoOrQBMKrqmhrhrKiyxSj.jpg');
        $manager->persist($placeholderActor);

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));

        $actors = $faker->actors($gender = null, $count = 190, $duplicates = false);
        $directors = $faker->directors($gender = null, $count = 100, $duplicates = false);
        $nationalities = ['Algerian','American','Argentine','Armenian','Australian','Austrian','Belgian','Brazilian','British','Canadian','Chinese','Costa Rican','Cuban','Danish','Dutch','English','Filipino','French','German','Indian','Irish','Italian','Japanese','Mexican','New Zealander','Pakistani','Portuguese','Russian','South African','Spanish','Ukrainian','Scottish','Palestinian'];

        foreach ($actors as $item){
            $fullname = $item; // Christian Bale
            $fullnameExploded = explode(' ', $fullname);

            $firstname = $fullnameExploded[0];
            $lastname = $fullnameExploded[1];
            $actor = new Actor();

            shuffle($nationalities);
            $nationalitiesSliced = array_slice($nationalities, 0, 1);
            foreach ($nationalitiesSliced as $nationality) {
                $actor->setNationality($nationality);
            }

            $actor->setFirstname($firstname);
            $actor->setLastname($lastname);
            $actor->setDob($faker->dateTimeThisCentury());
            $actor->setCreatedAt(new \DateTimeImmutable());
            $actor->setImage($placeholderActor);

            $createdActors[] = $actor;

            $manager->persist($actor);
        }

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));
        $categories = $faker->movieGenres(20);
        foreach ($categories as $item) {
            $category = new Category();
            $category->setName($item);

            $createdCategories[] = $category;

            $manager->persist($category);
        }

        $faker = \Faker\Factory::create();
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

             shuffle($createdCategories);
             $createdCategoriesSliced = array_slice($createdCategories, 0, 3);
             foreach ($createdCategoriesSliced as $category) {
                 $movie->addCategory($category);
             }

            shuffle($directors);
            $directorsSliced = array_slice($directors, 0, 1);
            foreach ($directorsSliced as $director) {
                $movie->setDirector($director);
            }

             $movie->setReleaseDate($faker->dateTime());
             $movie->setBoxOffice($faker->numberBetween(100000,1500000000));
             $movie->setDescription($faker->overview);
             $movie->setDuration($faker->numberBetween(90, 220));
             $movie->setNote($faker->randomFloat(1, 4, 10));
             $movie->setBudget($faker->numberBetween(10000000, 500000000));
             $movie->setWebsite($faker->url());
             $movie->addMediaobject($placeholderPoster);

             $manager->persist($movie);
        }

        $manager->flush();
    }
}
