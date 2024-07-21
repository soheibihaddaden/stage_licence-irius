<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Message::create([
            'nom' => 'John Doe',
            'email' => 'john.doe@example.com',
            'sujet' => 'Hello World',
            'user_message' => 'This is a test message.'
        ]);
        
    }
}
