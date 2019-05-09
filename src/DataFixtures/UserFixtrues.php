<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtrues extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = (new User())
            ->setEmail('admin@localhost')
            ->setPlainPassword('admin')
            ->setEnabled(true)
        ;

        $manager->persist($product);

        $manager->flush();
    }
}
