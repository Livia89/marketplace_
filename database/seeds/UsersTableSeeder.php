<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   /*     \DB::table("users")->insert(
            [
                'name' => 'administrator',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]
        );*/

  /*  factory(\App\User::class, 40)->create()->each(function ($user){
        $user->store()->save(factory(\App\Models\Store::class)->make());
    });*/

        \DB::table("users")->insert(
            [
                'name' => 'administrator',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('987654321'), // password
                'remember_token' => Str::random(10),
            ]);
    }
}
