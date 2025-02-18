<?php

namespace Zerotoprod\ValidateUrlCli\ShowRegex;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\ValidateUrl\ValidateUrl;

/**
 * @link https://github.com/zero-to-prod/validate-url-cli
 */
#[AsCommand(
    name: ShowRegexCommand::signature,
    description: 'Show the regex used to validate a url.'
)]
class ShowRegexCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public const signature = 'validate-url-cli:show-regex';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(ValidateUrl::regex);

        return Command::SUCCESS;
    }
}