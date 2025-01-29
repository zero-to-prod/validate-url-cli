<?php

namespace Zerotoprod\ValidateUrlCli\ValidateUrl;

use Zerotoprod\DataModel\DataModel;

class ValidateUrlArguments
{
    use DataModel;

    public const url = 'url';
    public string $url;
}
