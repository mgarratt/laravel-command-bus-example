<?php

namespace App\Handlers\Commands;

use App\Commands\RegisterUser;
use App\Events\UserRegistered;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Event;

class RegisterUserHandler
{
    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the command.
     *
     * @param  RegisterUser  $command
     * @return void
     */
    public function handle(RegisterUser $command)
    {
        $user = User::create(
            [
                'name' => $command->getName(),
                'email' => $command->getEmail(),
                'password' => bcrypt($command->getPassword()),
            ]
        );

        Event::fire(new UserRegistered($user));
    }
}
