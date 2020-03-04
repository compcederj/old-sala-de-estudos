<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'user_name' => env('ADMIN_USER_NAME'),
            'name' => env('ADMIN_NAME'),
            'birthday' => env('ADMIN_BIRTHDAY'),
            'email' => env('ADMIN_EMAIL'),
            'cell_phone' => env('ADMIN_CELL_PHONE'),
            'password' => bcrypt(env('ADMIN_PASSWORD'))
        ];
        if (User::where('email', '=', $data['email'])->count())
        {
            $user = User::where('email', '=', $data['email'])->first();
            $user->update($data);
            log("User $data updated");
        } elseif (User::where('user_name', '=', $data['user_name'])->count())
        {
            $user = User::where('user_name', '=', $data['user_name'])->first();
            $user->update($data);
            log("User $data updated");
        } else
        {
            User::create($data);
            log("User $data updated");
        }
    }

}