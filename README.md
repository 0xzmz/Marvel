# Marvel
Marvel Composer Package

[![ralph/marvel](https://jaywcjlove.github.io/sb/lang/english.svg)](README.md) 
[![ralph/marvel](https://jaywcjlove.github.io/sb/lang/chinese.svg)](README-zh.md) 

[![Latest Stable Version](https://poser.pugx.org/ralph/marvel/v/stable)](https://packagist.org/packages/ralph/marvel)
[![Latest Unstable Version](https://poser.pugx.org/ralph/marvel/v/unstable)](https://packagist.org/packages/ralph/marvel)
[![License](https://poser.pugx.org/ralph/marvel/license)](https://packagist.org/packages/ralph/marvel)

## Introduction

<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAwIiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlhhYVMiKTs8L3NjcmlwdD48L3N2Zz4=" type="image/svg+xml" AllowScriptAccess="always"></EMBED>

Welcome to the world's greatest marvel comics API!

The Marvel Comics API is a tool to help developers everywhere create amazing, uncanny and incredible web sites and applications using data from the 70-plus years of the Marvel age of comics.

**Ready to get started?** Great!

Here's the short version of what you need to do:

- **Sign up:** [Get an API key](https://developer.marvel.com/signup)
- **Be a good API citizen:** read, understand, and abide by the [terms of use](https://developer.marvel.com/terms) for the Marvel Comics API
- **Link back:** observe the [attribution and linking guidelines](https://developer.marvel.com/documentation/attribution) when displaying data from the API
- **Build cool stuff**: use [Ralph/Marvel](<https://packagist.org/packages/ralph/marvel>) Composer Package

> Ref: <https://developer.marvel.com/documentation/getting_started>

## Requirement

1. Guzzlehttp/guzzle
2. **[Composer](https://getcomposer.org/)**

## Installation

```shell
$ composer require "ralph/marvel:~0.0.2" -vvv
```

## Usage

```php
<?php

use Ralph\Marvel;

$config = [
    'publicKey' => '***',
    'privateKey' => '*******',
];

$marvel = new Marvel($config);

$options = [
    'limit' => 10,
];

// Fetches lists of comic characters with optional filters. 
$characters = $marvel->characters($options);

// Fetches lists of comics with optional filters.
$comics = $marvel->comics($options);

// Fetches lists of comic creators with optional filters. 
$creators = $marvel->creators($options);

// Fetches lists of events with optional filters.
$events = $marvel->events($options);

// Fetches lists of comic series with optional filters.
$series = $marvel->series($options);

// Fetches lists of comic stories with optional filters.
$stories = $marvel->stories($options);

```

## Documentation

For more detail documentation, we can access Maravel's develpoer site,<https://developer.marvel.com/docs#!/public/getCreatorCollection_get_0>.

## License

MIT
