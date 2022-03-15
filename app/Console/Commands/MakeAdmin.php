<?php

namespace App\Console\Commands;

use App\Models\User;
use Hash;
use Illuminate\Console\Command;

class MakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin {name?} {email?} {password?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin user to login dashboard.';

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
     * @return void
     */
    public function handle()
    {
        User::create([
            'name' => $this->argument('name') ?? $this->ask(__('Please provide your name.')),
            'email' => $this->argument('name') ?? $this->ask(__('Email')),
            'password' => Hash::make($this->argument('password') ?? $this->secret(__('New password')))
        ]);
        $this->info(__('User created successfully.'));
    }
}
