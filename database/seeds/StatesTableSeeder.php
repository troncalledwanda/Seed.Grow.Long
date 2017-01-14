<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
        	'title' => 'Seeding',
        	'quote' => "Don't judge each day by the harvest you reap but by the seeds that you plant. - Robert Louis Stevenson",
        	'paragraph' => "Keep it simple.  Because each plant has unique seed-starting requirements, it helps to start small by growing just a few varieties. Some seeds — such as tomatoes and marigolds — are especially easy to start indoors. If you're a beginner, choose those first, and then move on to more fussy seeds, such as petunias.",
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('states')->insert([
        	'title' => 'Growing',
        	'quote' => 'Liberty, when it begins to take root, is a plant of rapid growth. - George Washington',
        	'paragraph' => "Growing plants from seed is a great way to start gardening earlier in the season. With the right light and some simple equipment, it's easy to grow from seed to harvest.  Start by selecting one six-inch pot (for one plant) or a larger pot (approximately 12 inches) if you'd like to grow two plants. For a continuous supply of tomatoes, start one or two new plants from seed every two weeks. Fill the container(s) with starter potting mix and plant seeds about ¼ inch deep.",
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
        DB::table('states')->insert([
        	'title' => 'Longevity',
        	'quote' => 'Seven thousand years is just one day at a time. - Terry Pratchett',
        	'paragraph' => "Like anything in this world, excessive amounts of any one thing is often a bad thing, even if that substance is necessary for survival. Just because you think your plant might want more of something, doesn't mean you are doing your plant any good. The fact of the matter is, unless you know what you are doing, you may very well be killing it. Plants can't scream in pain like the rest of us....",
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]);
    }
}
