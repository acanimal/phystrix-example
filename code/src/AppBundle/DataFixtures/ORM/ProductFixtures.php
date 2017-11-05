<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory as Factory;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $product = new Product(
                $faker->name,
                $faker->randomNumber(2),
                $faker->text
            );

            $manager->persist($product);
        }

        $manager->flush();
    }
}
