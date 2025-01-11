<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'subject' => 'Inquiry about services',
                'message' => 'I would like to know more about your services.',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'subject' => 'Feedback on recent order',
                'message' => 'I received my order, and I have some feedback.',
            ],
            [
                'name' => 'Mohamed Ali',
                'email' => 'mohamed.ali@example.com',
                'subject' => 'Complaint about delivery',
                'message' => 'The delivery was delayed, and I would like to address this issue.',
            ]
        ]);
    }
}
