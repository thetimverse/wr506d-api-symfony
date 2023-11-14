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
        // $product = new Product();
        // $manager->persist($product);
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));

        $faker->actors($gender = null, $count = 100, $duplicates = false);
        $actor = new Actor();
        $fullname = $faker->actor();
        $explode = explode(' ',$fullname);
        $firstname = $explode[0];
        $lastname = $explode[1];
        $createdAt = \DateTimeImmutable::createFromMutable($faker->dateTimeThisDecade());
        $dob = $faker->dateTimeThisCentury();
        $actor->setFirstname($firstname);
        $actor->setLastname($lastname);
        $actor->setDob($dob);
        $actor->setCreatedAt($createdAt);

        $faker->movies(400);
        $movie = new Movie();
        $title = $faker->movie;
        $movie->setTitle($title);

        $manager->persist($actor);
        $manager->flush();
    }
}
