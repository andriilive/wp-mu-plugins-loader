# wp-mu-plugins-loader

[![StandWithUkraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md)
[![GitPod](https://img.shields.io/badge/Contribute%20with-Gitpod-908a85?logo=gitpod)](https://gitpod.io/#https://github.com/andriilive/wp-mu-plugins-loader)

Autoload mu-plugins from sub-folders. Checks the `/mu-plugins/{plugin}/{plugin,index,plugin}.php` files, and requires them if presented

## Install

Single command install from the website root.

```bash
# from site root
curl -o wp-content/mu-plugins/wp-mu-plugins-loader.php https://raw.githubusercontent.com/andriilive/wp-mu-plugins-loader/main/wp-mu-plugins-loader.php
```

### Manual install

1. Download loader file [wp-mu-plugins-loader.php](https://github.com/andriilive/wp-mu-plugins-loader/releases/download/release/wp-mu-plugins-loader.php)
2. Place loader file into `wp-content/mu-plugins/wp-mu-plugins-loader.php`

Inspired by Roots Bedrock
