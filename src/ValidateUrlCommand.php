<?php

namespace Zerotoprod\ValidateUrlCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\ValidateUrl\ValidateUrl;

#[AsCommand(
    name: ValidateUrlCommand::signature,
    description: 'Validates a url. Returns `true` if the url is valid, `false` otherwise.'
)]
class ValidateUrlCommand extends Command
{
    public const signature = 'validate-url-cli:validate';
    public const url = 'url';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            ValidateUrl::isUrl($input->getArgument(self::url))
                ? 'true'
                : 'false'
        );

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this->addArgument(self::url, InputArgument::REQUIRED, 'The url to validate');
    }
}