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
    DB::table('portfolio_entries')->insert(
      array(
        array('title' => 'Cross Training Chrome Extension', 
              'when' => '2015',
              'html' => 'I developed a <a href="/Cross%20Training.crx">Chrome Extension</a> to cross-reference baseball players\' pages on different websites. If you\'re on (e.g.) <a href="http://www.rotoworld.com/player/mlb/6224/player?r=1">Billy Hamilton\'s Rotoworld page</a>, a div will show at the bottom of your screen with links to his ESPN, baseball-reference, Yahoo Sports, etc pages.<br><br>This involved testing the URL to see if the user is on an applicable page, then accessing an API that I built and using the retrieved data to create the links.', 
              'created_at' => '2015-1-1'),
        array('title' => 'RaNKPoD', 
              'when' => '2014',
              'html' => 'I used <a href="http://laravel.com/" target="_new">Laravel</a> and <a href="https://angularjs.org/" target="_new">Angular</a> to make a <a href="http://rnkpd.com" target="_new">service</a> to create "mix tapes" of podcast episodes.', 
              'created_at' => '2014-10-1'),
        array('title' => 'Automated Tweeting MLB Daily Lineups', 
              'when' => 'early 2014', 
              'html' => '',
              'created_at' => '2014-4-1'),
        array('title' => 'Wedding Guest List Website', 
              'when' => 'early 2013', 
              'html' => 'A <a href="http://wedding.murribu.com">website</a> I made for my (then) fiancée and me to keep track of the Guest List for our wedding. Use the password gu3stp4ssw0rd - and all the data will be made-up. Feel free to mess with the data all you like.', 
              'created_at' => '2013-4-1'),
        array('title' => 'Benchwarner', 
              'when' => '2012-2014', 
              'html' => 'A <a href="http://benchwarner.com">website</a> to warn you when you\'re about to start someone who\'s getting the day off in your fantasy baseball league.', 
              'created_at' => '2012-4-1'),
      )
    );
    /*
    HomeEntry::create(['title' => 'I\'m a back end developer', 'body' => 'I have lots of experience in PHP, and I\'m learning Rails.']);
    HomeEntry::create(['title' => 'I\'m a front end developer', 'body' => 'I can wrangle CSS3, HTML5, Javascript (including Angular).']);
    HomeEntry::create(['title' => 'I believe it should just work', 'body' => 'I\'m starting to use automated testing to make sure I have happy users.']);*/
		// $this->call('UserTableSeeder');
	}

}
