<?php

namespace App\DataFixtures;

use App\Entity\Reference;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 1; $i <= 200; $i++) {
            $reference = new Reference();
            $reference->setName($faker->word());

            $manager->persist($reference);
        }
        $manager->flush();
    }
}
