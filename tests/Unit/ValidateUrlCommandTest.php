<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\ValidateUrlCli\ValidateUrlCommand;

class ValidateUrlCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ValidateUrlCommand());
        $Command = $Application->find(ValidateUrlCommand::signature);
        $CommandTester = new CommandTester($Command);

        $CommandTester->execute([ValidateUrlCommand::url =>'https://www.google.com']);

        $CommandTester->assertCommandIsSuccessful();
    }
}