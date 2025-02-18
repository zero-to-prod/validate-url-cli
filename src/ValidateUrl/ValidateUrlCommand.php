<?php

namespace Zerotoprod\ValidateUrlCli\ValidateUrl;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\ValidateUrl\ValidateUrl;

/**
 * @link https://github.com/zero-to-prod/validate-url-cli
 */
#[AsCommand(
    name: ValidateUrlCommand::signature,
    description: 'Validates a url. Returns the url when valid, null otherwise.'
)]
class ValidateUrlCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public const signature = 'validate-url-cli:validate';
    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public const url = 'url';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $ValidateUrlArguments = ValidateUrlArguments::from($input->getArguments());

        $output->writeln(
            ValidateUrl::isUrl($ValidateUrlArguments->url)
                ? $ValidateUrlArguments->url
                : ''
        );

        return Command::SUCCESS;
    }

    /**
     * @link https://github.com/zero-to-prod/validate-url-cli
     */
    public function configure(): void
    {
        $this->addArgument(ValidateUrlArguments::url, InputArgument::REQUIRED, 'The url to validate');
    }
}