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
- [Usage](#usage)
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

This will add the package to your project’s dependencies and create an autoloader entry for it.

## Usage

Run this command to see the available commands:

```shell
vendor/bin/validate-url-cli list
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
