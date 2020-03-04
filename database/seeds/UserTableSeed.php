<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'user_name' => env('ADMIN_USER_NAME'),
            'name' => env('ADMIN_NAME'),
            'birthday' => env('ADMIN_BIRTHDAY'),
            'email' => env('ADMIN_EMAIL'),
            'phone' => env('ADMIN_PHONE'),
            'password' => bcrypt(env('ADMIN_PASSWORD'))
        ];
        $user1 = User::where('email', '=', $data['email'])->first();
        $user2 = User::where('user_name', '=', $data['user_name'])->first();

        if (empty($user1) && empty($user2))
        {
            User::create($data);
            Log::info("User ". json_encode($data) . " created");
        } elseif ($user1->id === $user2->id)
        {
            $user1->update($data);
            Log::info("User ". json_encode($data) . " updated");
        } else
        {
            $message = "There is a user with email {$data['email']} for user_name {$data['user_name']}";
            Log::warning($message);
            echo $message . "\n";
        }
    }
}
