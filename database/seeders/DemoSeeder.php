<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'avaliador@example.com'],
            [
                'name' => ' ',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Evita duplicar notícias a cada seed:
        if (!News::where('user_id', $user->id)->exists()) {
            News::factory()->count(6)->for($user)->create();
        }
    }
}
