<?php

declare(strict_types=1);

namespace App;

class AdminNotice
{
    /**
     * Displays a message in the WP Admin Dashboard
     * @param string $msg - The message to display
     * @param string $level - The level of message. Either '', 'success', 'warning' or 'error'
     */
    public function __construct(string $msg, string $level = '')
    {
        $class = $level ? "notice notice-$level" : 'notice';
        add_action('admin_notices', function () use ($msg, $class) {
            echo "<div class=\"$class\"><p>$msg</p></div>";
        });
    }
}
