<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UpdatePasswords extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
           
            if (!preg_match('/^\$2[ayb]\$/', $user->password)) {
              
                $user->password = Hash::make($user->password);
                $user->save();
                $this->info('Contraseña actualizada para usuario: ' . $user->numeroId);
            }
        }

        $this->info('Todas las contraseñas han sido actualizadas.');
    }
}
