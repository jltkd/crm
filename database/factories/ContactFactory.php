<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => Company::all()->random()->id,
            'first_name' => $this->faker->firstName,
            'last_name'  => $this->faker->lastName,
            'title'      => $this->faker->jobTitle,
            'phone_number' => $this->faker->phoneNumber,
            'email_address' => $this->faker->email,
        ];
    }
}
