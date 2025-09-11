<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Keyword;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Get the admin user as creator
        $adminUser = User::where('email', 'admin@example.com')->first();
        
        if (!$adminUser) {
            $this->command->error('Admin user not found. Please run AdminUserSeeder first.');
            return;
        }

        // Get categories
        $politicsCategory = Category::where('category_name', 'Politics & Policy')->first();
        $techCategory = Category::where('category_name', 'Tech')->first();
        $businessCategory = Category::where('category_name', 'Business')->first();
        $healthCategory = Category::where('category_name', 'Health')->first();
        $energyCategory = Category::where('category_name', 'Energy & Climate')->first();
        $entertainmentCategory = Category::where('category_name', 'Entertainment')->first();
        $sportsCategory = Category::where('category_name', 'Sports')->first();

        // Sample news posts
        $posts = [
            [
                'title' => 'Sri Lanka Announces New Digital Economy Initiative',
                'description' => 'The government of Sri Lanka today unveiled an ambitious digital economy initiative aimed at transforming the country into a digital hub for South Asia. The comprehensive plan includes investments in digital infrastructure, technology education, and startup support programs. Minister of Technology stated that this initiative will create over 100,000 new jobs in the tech sector over the next five years. The program will focus on areas such as artificial intelligence, blockchain technology, and digital financial services. International tech companies have already expressed interest in establishing operations in Sri Lanka as part of this initiative.',
                'categories' => [$techCategory, $politicsCategory],
                'keywords' => ['digital economy', 'technology', 'sri lanka', 'government', 'startup']
            ],
            [
                'title' => 'Climate Change Summit Focuses on Renewable Energy Solutions',
                'description' => 'World leaders gathered in Colombo for the annual Climate Change Summit, with a special focus on renewable energy solutions for developing nations. The three-day summit brought together environmental scientists, policy makers, and industry leaders to discuss sustainable energy alternatives. Key topics included solar power adoption, wind energy projects, and innovative carbon capture technologies. Sri Lanka announced its commitment to achieve 70% renewable energy by 2030, with significant investments in solar and wind projects already underway.',
                'categories' => [$energyCategory, $politicsCategory],
                'keywords' => ['climate change', 'renewable energy', 'solar power', 'environment', 'sustainability']
            ],
            [
                'title' => 'Local Cricket Team Wins International Championship',
                'description' => 'In a thrilling final match, the Sri Lankan cricket team secured victory in the International Cricket Championship, defeating the defending champions by 5 wickets. The match, held at the R. Premadasa Stadium in Colombo, drew over 35,000 spectators and millions of television viewers worldwide. Star player Kusal Mendis scored a spectacular century, leading the team to this historic victory. This win marks Sri Lanka\'s return to form after several years of rebuilding the team with young talent.',
                'categories' => [$sportsCategory],
                'keywords' => ['cricket', 'sports', 'championship', 'sri lanka', 'victory']
            ],
            [
                'title' => 'New Healthcare Initiative Improves Rural Medical Access',
                'description' => 'A groundbreaking healthcare initiative has been launched to improve medical access in rural areas of Sri Lanka. The program includes mobile medical units, telemedicine services, and training programs for rural healthcare workers. The initiative aims to reach over 2 million people in remote areas who previously had limited access to quality healthcare. Digital health records and AI-assisted diagnosis tools are being deployed to ensure consistent care quality across all regions.',
                'categories' => [$healthCategory, $techCategory],
                'keywords' => ['healthcare', 'rural development', 'telemedicine', 'medical access', 'technology']
            ],
            [
                'title' => 'Tourism Industry Shows Strong Recovery with Record Bookings',
                'description' => 'Sri Lanka\'s tourism industry is experiencing a remarkable recovery with record-breaking advance bookings for the upcoming season. The Sri Lanka Tourism Development Authority reported a 150% increase in international bookings compared to last year. New eco-tourism initiatives and cultural heritage tours are attracting visitors from Europe, Asia, and North America. The government has introduced new visa facilitation measures and improved airport infrastructure to support the growing tourist influx.',
                'categories' => [$businessCategory],
                'keywords' => ['tourism', 'recovery', 'bookings', 'economy', 'travel']
            ],
            [
                'title' => 'Revolutionary Tea Plantation Uses AI for Quality Control',
                'description' => 'A leading tea plantation in the hill country has implemented artificial intelligence technology to revolutionize tea quality control and production efficiency. The AI system monitors soil conditions, weather patterns, and leaf quality in real-time, optimizing harvesting times and processing methods. This innovation has resulted in a 30% increase in premium grade tea production and significant cost savings. The technology is now being adopted by other plantations across the country.',
                'categories' => [$techCategory, $businessCategory],
                'keywords' => ['artificial intelligence', 'tea industry', 'agriculture', 'innovation', 'quality control']
            ],
            [
                'title' => 'National Film Festival Celebrates Local Cinema Achievements',
                'description' => 'The annual National Film Festival concluded with a grand ceremony celebrating the achievements of local cinema. Over 150 films were showcased during the week-long event, highlighting the diversity and creativity of Sri Lankan filmmakers. The festival featured categories for feature films, documentaries, and short films, with special recognition for emerging talent. International film critics praised the high quality of productions and the unique storytelling approaches of local directors.',
                'categories' => [$entertainmentCategory],
                'keywords' => ['film festival', 'cinema', 'entertainment', 'culture', 'local talent']
            ],
            [
                'title' => 'Startup Accelerator Program Launches to Support Young Entrepreneurs',
                'description' => 'A new startup accelerator program has been launched to support young entrepreneurs in developing innovative business solutions. The program provides mentorship, funding opportunities, and workspace facilities for early-stage startups. Focus areas include fintech, agtech, healthtech, and e-commerce solutions tailored for the South Asian market. The initiative is backed by both government support and private sector investment, with plans to support 100 startups in its first year.',
                'categories' => [$businessCategory, $techCategory],
                'keywords' => ['startup', 'entrepreneurship', 'innovation', 'business', 'investment']
            ],
            [
                'title' => 'Marine Conservation Project Protects Endangered Species',
                'description' => 'A comprehensive marine conservation project has been launched to protect endangered species in Sri Lankan waters. The initiative includes establishing new marine protected areas, implementing sustainable fishing practices, and conducting research on marine biodiversity. Special attention is being given to protecting sea turtles, whales, and coral reefs. The project involves collaboration between local communities, government agencies, and international conservation organizations.',
                'categories' => [$energyCategory],
                'keywords' => ['marine conservation', 'endangered species', 'environment', 'biodiversity', 'protection']
            ],
            [
                'title' => 'Education Ministry Introduces Coding Classes in Primary Schools',
                'description' => 'The Ministry of Education announced the introduction of coding and computer science classes in primary schools nationwide. The curriculum will cover basic programming concepts, digital literacy, and problem-solving skills using age-appropriate tools and games. Teacher training programs are being conducted to ensure quality education delivery. This initiative aims to prepare students for the digital economy and foster computational thinking from an early age.',
                'categories' => [$techCategory, $politicsCategory],
                'keywords' => ['education', 'coding', 'programming', 'digital literacy', 'schools']
            ]
        ];

        // Create posts and associate with categories and keywords
        foreach ($posts as $postData) {
            // Create the post
            $post = Post::create([
                'title' => $postData['title'],
                'description' => $postData['description'],
                'creator' => $adminUser->id
            ]);

            // Associate with categories
            if (isset($postData['categories'])) {
                foreach ($postData['categories'] as $category) {
                    if ($category) {
                        $post->categories()->attach($category->id);
                    }
                }
            }

            // Create and associate keywords
            if (isset($postData['keywords'])) {
                foreach ($postData['keywords'] as $keywordName) {
                    $keyword = Keyword::firstOrCreate(['keyword' => $keywordName]);
                    $post->keywords()->attach($keyword->id);
                }
            }

            $this->command->info("Created post: {$post->title}");
        }

        $this->command->info('Successfully seeded ' . count($posts) . ' news posts!');
    }
}
