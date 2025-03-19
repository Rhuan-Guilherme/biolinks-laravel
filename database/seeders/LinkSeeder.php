<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() === 0) {
            $this->command->warn('Nenhum usuário encontrado. O LinkSeeder não será executado.');
            return;
        }

        User::all()
            ->each(function (User $user) {
                Link::factory()->count(5)->create([
                    'user_id' => $user->id,
                ]);
            });
    }
}
