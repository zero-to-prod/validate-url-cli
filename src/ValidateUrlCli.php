<?php

namespace Zerotoprod\ValidateUrlCli;

use Symfony\Component\Console\Application;

class ValidateUrlCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateUrlCommand());
    }
}