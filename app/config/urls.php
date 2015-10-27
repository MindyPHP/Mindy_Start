<?php

use Mindy\Router\Patterns;

return [
    '/user' => new Patterns('User.urls', 'user'),
    '/core' => new Patterns('Modules.Admin.urls', 'admin'),
    '/core/engine' => new Patterns('Modules.Core.urls', 'core'),
    '/' => new Patterns('Modules.blog.urls', 'blog')
];
