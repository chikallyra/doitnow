<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [
            [
                'name' => 'John Doe',
                'position' => 'Company',
                'comment' => 'Great service and support. Highly recommended!',
                'photo' => 'img/img.png',
                'rating' => 5,
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Missionary',
                'comment' => 'The platform is user-friendly and efficient.',
                'photo' => 'img/img.png',
                'rating' => 4,
            ],
            [
                'name' => 'Mike Johnson',
                'position' => 'Company',
                'comment' => 'Good experience overall. Will use again.',
                'photo' => 'img/img.png',
                'rating' => 4,
            ],
            [
                'name' => 'Emily Davis',
                'position' => 'Missionary',
                'comment' => 'Had some issues initially, but the support team resolved them quickly.',
                'photo' => 'img/img.png',
                'rating' => 3,
            ],
            [
                'name' => 'David Wilson',
                'position' => 'Company',
                'comment' => 'Excellent features and easy to navigate.',
                'photo' => 'img/img.png',
                'rating' => 5,
            ],
            [
                'name' => 'Sophia Martinez',
                'position' => 'Missionary',
                'comment' => 'A bit complicated at first, but got the hang of it.',
                'photo' => 'img/img.png',
                'rating' => 3,
            ],
            [
                'name' => 'Chris Brown',
                'position' => 'Company',
                'comment' => 'Impressed with the customer support and overall service.',
                'photo' => 'img/img.png',
                'rating' => 5,
            ],
            [
                'name' => 'Amanda Taylor',
                'position' => 'Missionary',
                'comment' => 'The platform is okay but needs more features.',
                'photo' => 'img/img.png',
                'rating' => 3,
            ],
            [
                'name' => 'Matthew Anderson',
                'position' => 'Company',
                'comment' => 'Very satisfied with the results and service.',
                'photo' => 'img/img.png',
                'rating' => 5,
            ],
            [
                'name' => 'Olivia Thomas',
                'position' => 'Missionary',
                'comment' => 'Helpful and supportive community. Enjoyed using the platform.',
                'photo' => 'img/img.png',
                'rating' => 4,
            ],
        ];

        foreach ($feedbacks as $feedback) {
            Feedback::create($feedback);
        }
    }
}
