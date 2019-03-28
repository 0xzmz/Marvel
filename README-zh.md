# 漫威

漫威 API Composer 包

[![ralph/marvel](https://jaywcjlove.github.io/sb/lang/english.svg)](README.md) 
[![ralph/marvel](https://jaywcjlove.github.io/sb/lang/chinese.svg)](README-zh.md) 

[![Latest Stable Version](https://poser.pugx.org/ralph/marvel/v/stable)](https://packagist.org/packages/ralph/marvel)
[![Latest Unstable Version](https://poser.pugx.org/ralph/marvel/v/unstable)](https://packagist.org/packages/ralph/marvel)
[![License](https://poser.pugx.org/ralph/marvel/license)](https://packagist.org/packages/ralph/marvel)

## 介绍

欢迎来到世界上最伟大的漫威漫画API！

Marvel Comics API是一个工具，可以帮助各地的开发人员使用漫威漫画时代70多年的数据来创建令人惊叹、不可思议和难以置信的网站和应用程序。

**准备开始了吗？** 好的！

下面是您需要做的简要内容：

- **注册:** [获取API密钥](https://developer.marvel.com/signup)
- **成为优秀的API使用者:** 阅读，理解并遵守 [Marvel Comics API](https://developer.marvel.com/terms) 的使用条款
- **链接返回:** 显示来自API的数据时，[请遵循属性和链接指南](https://developer.marvel.com/documentation/attribution))。
- **开始建立有趣的应用:** 使用 [Ralph/Marvel](https://packagist.org/packages/ralph/marvel) 包

> 上述内容来自: [https://developer.marvel.com/documentation/getting_started](https://developer.marvel.com/documentation/getting_started)
> 
> 请严格遵守 漫威API 使用要求

## 环境要求

1. Guzzlehttp/guzzle
2. **[Composer](https://getcomposer.org/)**

## 安装

```shell
$ composer require "ralph/marvel:~0.0.2" -vvv
```

## 使用

```php
<?php

use Ralph\Marvel;

$config = [
    'publicKey' => '***',  // 在漫威官网申请的 publicKey
    'privateKey' => '*******',  // 在漫威官网申请的 privateKey
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

## 文档

更多详细接口内容，可以访问漫威API官方文档进行查看<https://developer.marvel.com/docs#!/public/getCreatorCollection_get_0>。

我也将尽快更新更加详细的接口说明。

## 协议

MIT
