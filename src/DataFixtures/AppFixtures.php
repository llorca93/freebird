<?php

namespace App\DataFixtures;

use Faker;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /* $category = new Category();
         $product = new Product();
         $product->setName('Parapente Advance Alpha 6');
         $product->setPrice(2900);
         $product->setImg1('para1-1.jpg');
         $product->setImg2('para1-2.jpg');
         $product->setImg3('para1-3.jpg');
         $product->setDescription(' Parapente Advance alpha 6 homologué EN A parfait pour débuter et progresser en sécurité');
         $product->setCategory(1);
         $manager->persist($product); 
         $manager->flush();
        */
        $faker = Faker\Factory::create();
         $customer = new User ();
        $customer->setEmail('admin.user@gmail.com');
        $customer->setPassword('@Zerty123');
        $customer->setLastName('admin');
        $customer->setFirstName('istrator');
        $customer->setGender('Homme');
        $customer->setAddress('nul part');
        $customer->setCity('Loin');
        $customer->setZipCode('75000');
        $customer->setDob($faker->dateTime());

        $manager->persist($customer);
        $manager->flush();
        // $category = new Category();
        // $category->setName('stages');
        // $manager->persist($category);
        // $manager->flush();
        

       // $faker = Faker\Factory::create();

       /* for ($i=1; $i<6; $i++){
          $customer = new User ();
          $customer->setEmail($faker->email());
          $customer->setPassword($faker->text(15));
          $customer->setLastName($faker->name());
          $customer->setFirstName($faker->name());
          $customer->setGender($faker->text(40));
          $customer->setAddress($faker->address());
          $customer->setCity($faker->city());
          $customer->setZipCode($faker->numberBetween(10000,99999));
          $customer->setDob($faker->dateTime());

          $manager->persist($customer);
          $manager->flush();
          

        }*/
    }
}
