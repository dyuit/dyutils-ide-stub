# 使用

安装 `dyutils.so` 扩展后。

php项目引入ide支持,修改 `composer.json`

```
composer require --dev dyutils/ide-stubs
```

或者

```json
{
    "require": {
        "php": ">=7.2.0"
    },
    "require-dev": {
        "dyutils/ide-stubs": "dev-main"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":"https://git.dyuit.cn/dyutils/ide-stubs"
        }
    ]
}
```

