<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('home.index', function ($view) {
            $tasks = [
                [
                    'id' => 1,
                    'title' => 'Complete Documentation',
                    'description' => 'Finish writing the documentation for the project.',
                    'created_at' => '2024-10-01 10:00:00',
                    'updated_at' => '2024-10-02 12:00:00',
                    'priority' => 'High',
                    'status' => true,
                    'assignee' => 'John Doe',
                ],
                [
                    'id' => 2,
                    'title' => 'Fix Bugs',
                    'description' => 'Identify and resolve bugs reported by the QA team.',
                    'created_at' => '2024-10-03 09:00:00',
                    'updated_at' => '2024-10-04 14:00:00',
                    'priority' => 'Medium',
                    'status' => false,
                    'assignee' => 'Jane Smith',
                ],
                [
                    'id' => 3,
                    'title' => 'Implement Feature X',
                    'description' => 'Develop and integrate Feature X into the current system.',
                    'created_at' => '2024-10-05 08:30:00',
                    'updated_at' => '2024-10-06 11:00:00',
                    'priority' => 'Low',
                    'status' => true,
                    'assignee' => 'Alex Johnson',
                ]
            ];

            $lastTask = end($tasks);
            $view->with('lastTask', $lastTask);
        });
    }
}
