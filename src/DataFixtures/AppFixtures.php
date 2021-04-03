<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $category = new Category();
         $product = new Product();
         $product->setName('Parapente Advance Alpha 6');
         $product->setPrice(2900);
         $product->setImg1('para1-1.jpg');
         $product->setImg2('para1-2.jpg');
         $product->setImg3('para1-3.jpg');
         $product->setDescription(' Parapente Advance alpha 6 homologué EN A parfait pour débuter et progresser en sécurité');
         $product->setCategory($category);
         $manager->persist($product); 
         $manager->flush();
        // $category = new Category();
        // $category->setName('stages');
        // $manager->persist($category);
        // $manager->flush();
        
    }
}