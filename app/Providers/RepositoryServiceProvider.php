<?php

namespace App\Providers;

use App\Interfaces\repositorioLibrosInterface;
use App\Repository\librosRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this -> app -> bind(repositorioLibrosInterface::class, librosRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
