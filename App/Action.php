<?php

declare(strict_types=1);

namespace App;

use function \add_action;

abstract class Action
{
    protected string $hook;
    protected int $priority = 10;
    protected int $num_args = 1;

    abstract function handler(...$args): void;

    final public function register(): void
    {
        if (empty($this->hook)) {
            new AdminNotice('Tried to register an action with empty [hook] property: ' . self::class, 'warning');
        } else {
            add_action($this->hook, [$this, 'handler'], $this->priority, $this->num_args);
        }
    }
}
