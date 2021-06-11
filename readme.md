# 使用

安装 `libdyutils.so` 扩展后。

php项目引入ide支持,修改 `composer.json`

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
            "url": "git@git.dyuit.cn:dyutils/ide-stubs.git"
        }
    ]
}
```


```bob

                 +------------------+
+-------+        |                  |         +---------------+
|       |        |                  |         |  additional   |
|client +------> |     facade       +-------> |  facade       |
+-------+        |                  |         |               |
                 |                  |         |               |
                 +--+----+------+--++         +---------------+
                    |    |      |  |
           +--------+    |      |  +--------+
           |          +--+      +-+         |
           |          |           |         |
           v          |           v         v
       +---+---+  +---v--+   +----+--+  +---+----+
       |       |  |      |   |       |  |        |
       | system|  |system|   |system |  | system |
       |       |  |      |   |       |  |        |
       +-------+  +------+   +-------+  +--------+


```