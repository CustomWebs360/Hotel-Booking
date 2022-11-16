<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<60; $i++){
            $contact = new Contact();
            $contact->name = $faker->name;
            $contact->email = $faker->email;
            $contact->phone = '01879264585';
            $contact->message = $faker->text(500);
            $contact->subject = $faker->text(30);
            $contact->save();

        }
    }
}
