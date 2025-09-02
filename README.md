# Zerotoprod\ValidateUrlCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-url-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-url-cli/test.yml?label=test)](https://github.com/zero-to-prod/validate-url-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-url-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/validate-url-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-url-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/validate-url-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-url-cli?color=blue)](https://packagist.org/packages/zero-to-prod/validate-url-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-url-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-url-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-url-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-url-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-url-cli?color=pink)](https://github.com/zero-to-prod/validate-url-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/validate-url-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/validate-url-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/validate-url-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/validate-url-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
    - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`validate-url-cli:src`](#validate-url-clisrc)
    - [`validate-url-cli:validate`](#validate-url-clivalidate)
    - [`validate-url-cli:show-regex`](#validate-url-clishow-regex)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A CLI for Validating a Url.

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\ValidateUrlCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/validate-url-cli
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/validate-url)
vendor/bin/zero-to-prod-validate-url

# Publish to custom directory
vendor/bin/zero-to-prod-validate-url /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-validate-url"
        ],
        "post-update-cmd": [
            "zero-to-prod-validate-url"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/validate-url-cli list
```

### Available Commands

#### `validate-url-cli:src`

Display the project's GitHub repository URL.

**Usage:**
```shell
vendor/bin/validate-url-cli validate-url-cli:src
```

**Arguments:** None

**Example:**
```shell
vendor/bin/validate-url-cli validate-url-cli:src
```

**Output:**
```
https://github.com/zero-to-prod/validate-url-cli
```

#### `validate-url-cli:validate`

Validates a URL and returns the URL if valid, empty output otherwise.

**Usage:**
```shell
vendor/bin/validate-url-cli validate-url-cli:validate <url>
```

**Arguments:**
- `url` (required): The URL to validate

**Example:**
```shell
vendor/bin/validate-url-cli validate-url-cli:validate "https://example.com"
```

**Output (valid URL):**
```
https://example.com
```

**Example with invalid URL:**
```shell
vendor/bin/validate-url-cli validate-url-cli:validate "not-a-url"
```

**Output (invalid URL):**
```

```

#### `validate-url-cli:show-regex`

Display the regular expression pattern used to validate URLs.

**Usage:**
```shell
vendor/bin/validate-url-cli validate-url-cli:show-regex
```

**Arguments:** None

**Example:**
```shell
vendor/bin/validate-url-cli validate-url-cli:show-regex
```

**Output:**
```
/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/
```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/validate-url-cli/general):

```shell
docker run --rm davidsmith3/validate-url-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/validate-url-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
