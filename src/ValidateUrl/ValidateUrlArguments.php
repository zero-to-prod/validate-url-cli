<?php

namespace Zerotoprod\ValidateUrlCli\ValidateUrl;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/validate-url-cli
 */
class ValidateUrlArguments
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public const url = 'url';
    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public string $url;
}
