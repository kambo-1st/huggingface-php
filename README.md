<p align="center">
    <p align="center">
        <a href="https://github.com/kambo-1st/huggingface-php/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/kambo-1st/huggingface-php/tests.yml?branch=main&label=tests&style=round-square"></a>
        <a href="https://packagist.org/packages/kambo/huggingface-php"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/kambo/huggingface-php"></a>
        <a href="https://packagist.org/packages/kambo/huggingface-php"><img alt="Latest Version" src="https://img.shields.io/packagist/v/kambo/huggingface-php"></a>
        <a href="https://packagist.org/packages/kambo/huggingface-php"><img alt="License" src="https://img.shields.io/github/license/kambo/huggingface-php"></a>
    </p>
</p>

------
**Huggingface PHP** is a community-maintained PHP API client that allows you to interact with the [Hugging Face API](https://huggingface.co/inference-api).



## Table of Contents
- [Get Started](#get-started)
- [Usage](#usage)
    - [Inferring](#Inferring)
- [Testing](#testing)


## Get Started

> **Requires [PHP 8.1+](https://php.net/releases/)**

First, install OpenAI via the [Composer](https://getcomposer.org/) package manager:

```bash
composer require kambo/huggingface-php
```

Ensure that the `php-http/discovery` composer plugin is allowed to run or install a client manually if your project does not already have a PSR-18 client integrated.
```bash
composer require guzzlehttp/guzzle
```

Then, interact with Hugging Face's API:

```php
use Kambo\Huggingface\Huggingface;
use Kambo\Huggingface\Enums\Type;

$yourApiKey = getenv('HUGGINGFACE_API_KEY');
$client = Huggingface::client($yourApiKey);

$result = $client->inference()->create([
    'model' => 'gpt2',
    'inputs' => 'The goal of life is?',
    'type' => Type::TEXT_GENERATION,
]);

echo $result['generated_text']."\n";
```

## Usage

### `Inference` Resource

#### `create`

Execute inference using the chosen model.

```php
$response = $client->inference()->create([
    'model' => 'gpt2',
    'inputs' => 'The goal of life is?',
    'type' => Type::TEXT_GENERATION,
]);


$response->toArray(); // ['type' => .., 'generated_text' => ...]
```

## Acknowledge

This library was inspired at the source level by the PHP OpenAI client. Portions of the code have been directly copied from this outstanding library.

---

Huggingface PHP is an open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.