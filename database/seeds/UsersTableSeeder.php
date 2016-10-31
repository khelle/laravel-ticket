<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = [
            [ 'name' => 'ActiveTicketing', 'email' => 'test@activeticketing.com', 'password' => Hash::make('secret') ],
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}
