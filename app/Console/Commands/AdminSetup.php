<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Role;

class AdminSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:admin {email} {pass} {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup the admin account and create necessary things.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line("Setting up...");

        if($this->argument('email') === null) {
            $this->error('Missing options. email is required.');
        } else {
            $username = $this->argument('user') ?? 'admin';
            $email = $this->argument('email');

            // Create the default user.
            $admin = User::create([
                'name' => 'Administrator',
                'username' => $username,
                'email' => $email,
                'password' => bcrypt($this->argument('pass')),
            ]);

            // Create a new role to attach to the user.
            $role = Role::create([
                'name' => 'admin',
                'description' => 'Can do everything.'
            ]);

            $admin->roles()->attach($role);
            $admin->notify(new AdminSetupDone());

            $this->info('Admin account setup!');
        }

    }
}
