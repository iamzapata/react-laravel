<?php

use Faker\Factory;
use ReactLaravel\Models\Comment;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
	/**	 
	 * @var Comment
	 */
	private $comment;

	/**
	 * @var Factory
	 */
	private $faker;

	/**
	 * CommentsTableSeeder Contructor
	 * 
	 * @param Comment $comment
	 */
	public function __construct(Comment $comment) 
	{
		$this->comment = $comment;

		$this->faker = Factory::create();
	}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach(range(1, 20) as $index)
    	{
    		$this->comment->create([

    			'author' => $this->faker->name(),

    			'text' => $this->faker->text()

    		]);
    	}
    }
}
