<?php

namespace Zerotoprod\ValidateUrlCli;

use Symfony\Component\Console\Application;
use Zerotoprod\ValidateUrlCli\ShowRegex\ShowRegexCommand;
use Zerotoprod\ValidateUrlCli\Src\SrcCommand;
use Zerotoprod\ValidateUrlCli\ValidateUrl\ValidateUrlCommand;

/**
 * A CLI for Validating a Url.
 *
 * @link https://github.com/zero-to-prod/validate-url-cli
 */
class ValidateUrlCli
{
    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ValidateUrlCommand());
        $Application->add(new ShowRegexCommand());
    }
}