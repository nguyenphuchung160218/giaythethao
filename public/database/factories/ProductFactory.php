<?php
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
	protected $model = Product::class;


	public function definition()
	    {
	        return [
	        "pro_name"          =>  $faker->word,
	        "pro_category_id"           =>  $faker->unique()->randomNumber,
	        "pro_content"   =>  \Str::random(20),
	        "pro_price"         =>  $faker->numberBetween(1000, 100000000),
	        "pro_number"      =>  $faker->numberBetween(1,100),
	        "pro_buy"      =>  $faker->numberBetween(1,100),
	        "pro_total_number"      =>  $faker->numberBetween(1,100),
	        "pro_sale"         =>  $faker->numberBetween(1,100),
	        "pro_total_rating"         =>  $faker->numberBetween(1,100)
	        ];
	    }


       factory(\App\Models\Product::class,100)->create();
}