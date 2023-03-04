<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class ActionServiceProvider extends ServiceProvider
{
    private string $path_to_dir;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->path_to_dir = __DIR__ . '/../Actions';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!is_dir($this->path_to_dir)) {
            return;
        }

        $finder = new Finder();
        $finder->files()->in($this->path_to_dir)->name('*.php');

        foreach ($finder as $file) {
            $class_name = 'App\\Actions\\' . str_replace('/', '\\', $file->getRelativePath()) . '\\' . $file->getFilenameWithoutExtension();
            if (class_exists($class_name) && method_exists($class_name, 'register')) {
                (new $class_name())->register();
            }
        }
    }
}
