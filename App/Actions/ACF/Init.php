<?php

declare(strict_types=1);

namespace App\Actions\ACF;

use App\Action;
use Roots\WPConfig\Config;
use Symfony\Component\Finder\Finder;

use function acf_add_local_field_group;

class init extends Action
{
    protected string $hook = 'acf/init';

    public function handler(...$args): void
    {
        $path = Config::get('ACF_CONFIG_DIR');
        $finder = new Finder();
        $finder->files()->in($path)->name('*.php');

        foreach ($finder as $file) {
            $args = include($file->getPathname());
            if ($args) {
                acf_add_local_field_group($args);
            }
        }
    }
}
