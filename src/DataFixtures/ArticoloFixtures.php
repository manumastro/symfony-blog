<?php

namespace App\DataFixtures;

use App\Entity\Articolo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticoloFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0; $i <= 10; $i++){
            $articolo = new Articolo();
            $articolo->setTitolo("titolo dell'articolo $i")
                ->setContenuto("<p>Contenuto dell'articolo $i</p>")
                ->setImage("https://via.placeholder.com/350x150")
                ->setCreatedAt(new \DateTime());

            $manager->persist($articolo);
        }

        $manager->flush();
    }
}
