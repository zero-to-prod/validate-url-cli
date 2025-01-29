<?php

namespace Zerotoprod\ValidateUrlCli;

use Symfony\Component\Console\Application;
use Zerotoprod\ValidateUrlCli\Src\SrcCommand;
use Zerotoprod\ValidateUrlCli\ValidateUrl\ValidateUrlCommand;

class ValidateUrlCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateUrlCommand());
    }
}