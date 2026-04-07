<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // PHP 8.4+ can emit tempnam() notices that Symfony treats as exceptions unless TMPDIR is app-local.
        $tmp = storage_path('framework/tmp');
        if (! is_dir($tmp)) {
            @mkdir($tmp, 0775, true);
        }
        putenv('TMPDIR='.$tmp);
        $_ENV['TMPDIR'] = $tmp;
        $_SERVER['TMPDIR'] = $tmp;
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::if('kisrpPublicAsset', function (?string $path): bool {
            return is_string($path) && $path !== '' && file_exists(public_path($path));
        });
    }
}
