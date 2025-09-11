<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([

            [
                'postid' => 1,
                'title' => 'Sri lanka oil prices latest updates',
                'slug' => 'sri-lanka-oil-prices-latest-updates',
                'description' => '<p>sri lanak oil</p>
<p><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753902338/news-images/cn15rejy3crlh07w5efb.png" alt="" width="358" height="203"></p>
<p><span style="color: rgb(224, 62, 45);"><strong>khbifbi</strong></span></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753902399/thumbnails/cqq3gyd3ctbwmpwtlhld.png',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-30 13:36:40',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 2,
                'title' => 'Example 2 Sri lanka oil prices latest updates',
                'slug' => 'example-2-sri-lanka-oil-prices-latest-updates',
                'description' => '<p>wfewefwef<img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753902552/news-images/ysldrxawojecett3rken.png" alt="" width="858" height="483"></p>
<p>&nbsp;</p>
<p>rfff54<img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753902623/news-images/xkiv7ndqsnlvzzrxnixt.png" alt="" width="191" height="107"></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753902635/thumbnails/hwrgxdhqxotvr4adltoh.png',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-30 13:40:36',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 3,
                'title' => 'New Tech Breakthrough in AI',
                'slug' => 'new-tech-breakthrough-in-ai',
                'description' => '<p style="text-align: center;">Scientists have developed a new AI that can learn twice as fast as current models. Experts say this is a major step forward in machine learning research.</p>
<p style="text-align: center;"><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753941763/news-images/yjjq9q0egwqc5w7shhgb.jpg" alt="" width="273" height="181"></p>
<p style="text-align: center;">Scientists have developed a new AI that can learn twice as fast as current models. Experts say this is a major step forward in machine learning research.</p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753941813/thumbnails/lxojth7ojzidqfsqad6r.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 00:33:33',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 4,
                'title' => 'Sri Lanka Launches New Wildlife Protection Initiative',
                'slug' => 'sri-lanka-launches-new-wildlife-protection-initiative',
                'description' => '<p style="text-align: center;">Sri Lanka\'s government has launched a new nationwide initiative aimed at strengthening wildlife protection and promoting eco-tourism. The project includes expanded ranger patrols, community engagement programs, and investment in sustainable tourism infrastructure.</p>
<p style="text-align: center;"><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753941865/news-images/s1ue9ydv9ipioyigo40d.jpg" alt="" width="345" height="229"></p>
<p style="text-align: center;">Sri Lanka\'s government has launched a new nationwide initiative aimed at strengthening wildlife protection and promoting eco-tourism. The project includes expanded ranger patrols, community engagement programs, and investment in sustainable tourism infrastructure.</p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753941893/thumbnails/z23h0mexqsx7ayvdqo1f.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 00:34:53',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 5,
                'title' => 'Apple Unveils iPhone 16 Pro with AI Features',
                'slug' => 'apple-unveils-iphone-16-pro-with-ai-features',
                'description' => '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753941925/news-images/urbqghsxiwfzaiqds6ls.jpg" alt="" width="357" height="237"></p>
<p style="text-align: center;">Apple officially revealed the iPhone 16 Pro, featuring advanced AI capabilities including real-time translation, smart photo editing, and adaptive battery optimization. Tech enthusiasts are calling it a major leap in smartphone innovation.</p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753941956/thumbnails/sn2wytho1hcdzi3ltxpi.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 00:35:55',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 6,
                'title' => 'Heavy Rains Cause Flooding Across Colombo District',
                'slug' => 'heavy-rains-cause-flooding-across-colombo-district',
                'description' => '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942000/news-images/uvf73u8zp6dvn4f8juqa.jpg" alt="" width="405" height="268"></p>
<p style="text-align: center;">Torrential rains over<span style="color: rgb(224, 62, 45);"><strong> the past 48 hours have caused severe flooding in several areas of the Colombo District, affecting transportation and displacing hundreds o</strong></span>f residents. Emergency services are working to restore access and provide relief.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942018/news-images/nwvmmlltal6zvdotvsuj.jpg" alt="" width="276" height="183"></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942064/thumbnails/i20ny8byz800sut3xkne.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 00:37:44',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 7,
                'title' => '5 Budget-Friendly Travel Destinations in Asia for 2025',
                'slug' => '5-budget-friendly-travel-destinations-in-asia-for-2025',
                'description' => '<p style="text-align: center;">Planning a trip in 2025? Discover 5 amazing yet affordable destinations in Asia that offer breathtaking views, unique culture, and unforgettable experiences—perfect for backpackers and budget travelers alike.</p>
<p style="text-align: center;"><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942136/news-images/jwbp9e3218qshzfvrgpm.jpg" alt="" width="300" height="168"></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942150/thumbnails/mau9jiivwjqo3myn2rbf.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 00:39:10',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 8,
                'title' => 'How to Stay Focused While Working from Home',
                'slug' => 'how-to-stay-focused-while-working-from-home',
                'description' => '<p style="text-align: center;">Working from home can blur the lines between professional and personal life. This article shares practical tips and proven techniques to stay focused, organized, and mentally healthy while working remotely.<img style="display: block; margin-left: auto; margin-right: auto;" src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942194/news-images/k7kxysosfdydv0citf3l.jpg" alt="" width="300" height="168"></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753942205/thumbnails/ecbyvclpvegnx6pu77nv.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 00:40:05',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 9,
                'title' => 'How Thailand Is Leading Southeast Asia\'s Green Energy Revolution',
                'slug' => 'how-thailand-is-leading-southeast-asias-green-energy-revolution',
                'description' => '<p>With ambitious goals for carbon neutrality, Thailand is becoming a regional leader in renewable energy. Discover how policy, innovation, and public awareness are driving the transition.<br><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753944323/news-images/zydahae3xydklzaskirk.jpg" alt="" width="498" height="341"></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753944353/thumbnails/gtk0r9qt1zetrxqy93y3.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 01:15:53',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 10,
                'title' => 'Breakthrough in Dengue Vaccine Offers Hope to Millions in Asia',
                'slug' => 'breakthrough-in-dengue-vaccine-offers-hope-to-millions-in-asia',
                'description' => '<p>A new dengue vaccine shows promising results in clinical trials, potentially protecting millions across Asia’s most vulnerable regions amid rising cases in 2025.</p>
<p><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753944633/news-images/gmekipvwyhbsfep6ry53.jpg" alt="" width="559" height="326"></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753944647/thumbnails/p1gvqmeodzoxfpzpfbka.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 01:20:47',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 11,
                'title' => 'How Asia\'s Remote Work Boom Is Reshaping the Real Estate Market',
                'slug' => 'how-asias-remote-work-boom-is-reshaping-the-real-estate-market',
                'description' => '<p style="text-align: center;"><em><strong>Remote work is here to stay in Asia. Learn how this cultural shift is transforming real estate markets in major cities, from co-living spaces to declining office demand.</strong></em><br><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1753944864/news-images/ubiajbeqkka4ohg72mtf.jpg" alt="" width="319" height="197"></p>
<p style="text-align: center;"><span style="color: rgb(224, 62, 45);"><em><strong>k is here to stay in Asia. Learn how this cultural shift is transforming real estate markets in major cities, from co-living spaces to declining office <span style="background-color: rgb(0, 0, 0);">demand.</span></strong></em></span></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1753944926/thumbnails/f7tvytcfv5flzvopubtd.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-07-31 01:25:25',
                'updated_at' => '2025-07-31 11:00:37',
            ],

            [
                'postid' => 12,
                'title' => 'new testing post here',
                'slug' => 'new-testing-post-here-68af248a2400d',
                'description' => '<p><img src="https://res.cloudinary.com/dsfutd4pj/image/upload/v1756308566/news-images/qyghmmmvlrh5vophwayo.jpg" alt="" width="660" height="660"></p>
<p>news a<em>bout</em> <span style="background-color: rgb(224, 62, 45);">new logo</span></p>',
                'thumbnail' => 'https://res.cloudinary.com/dsfutd4pj/image/upload/v1756308620/thumbnails/arq7tm75exbrlf6113o8.jpg',
                'keywords' => null,
                'creator' => 1,
                'created_at' => '2025-08-27 10:00:18',
                'updated_at' => '2025-08-27 10:00:18',
            ],

        ]);
    }
}
