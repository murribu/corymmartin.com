<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
    
    DB::table('home_entries')->insert(
      array(
        array('title' => 'I\'m a back end developer', 'body' => 'I have lots of experience in PHP, and I\'m learning Rails.'),
        array('title' => 'I\'m a front end developer', 'body' => 'I can wrangle CSS3, HTML5, Javascript (including Angular).'),
        array('title' => 'I believe it should just work', 'body' => 'I\'m starting to use automated testing to make sure I have happy users.'),
      )
    );
    /*
    HomeEntry::create(['title' => 'I\'m a back end developer', 'body' => 'I have lots of experience in PHP, and I\'m learning Rails.']);
    HomeEntry::create(['title' => 'I\'m a front end developer', 'body' => 'I can wrangle CSS3, HTML5, Javascript (including Angular).']);
    HomeEntry::create(['title' => 'I believe it should just work', 'body' => 'I\'m starting to use automated testing to make sure I have happy users.']);*/
		// $this->call('UserTableSeeder');
	}

}
