<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal_Details>
 */
class Personal_DetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'staff_id'=>fake()->randomDigitNotNull(),
            'surname'=>fake()->name(),
            // 'first_name'=>fake()->name(),
            // 'middle_name'=>fake()->name(),
            // 'title'=>fake()->name(),
            // 'gender'=>fake()->name(),
            // 'date_of_birth'=>fake()->date(),
            // 'phone_number'=>fake()->phoneNumber(),
            // 'marital_status'=>fake()->name(),
            // 'place_of_birth'=>fake()->name(),
            // 'nationality'=>fake()->name(),
            // 'geopolitical_zone'=>fake()->name(),
            // 'senatorial_district'=>fake()->name(),
            // 'lga'=>fake()->name(),
            // 'resdential_address'=>fake()->address(),
            // 'permanent_home_address'=>fake()->address(),
            // 'spouse'=>fake()->name(),
            // 'hobbies'=>fake()->name(),
            // 'religion'=>fake()->name(),
            // 'number_of_children'=>fake()->randomDigitNotNull(),
            // 'name_of_children'=>fake()->name(),
            // 'dob_of_children'=>fake()->date(),
            // 'passport'=>fake()->image(),
            // 'transfer_by'=>fake()->name(),
            // 'transfer_date'=>fake()->date()
        ];
    }
}
