# satis_demo

### Composer
Composer是PHP的包管理器

### 创建第一个Composer包
- 前提：安装php及Composer
- 1、创建如下目录结构及文件
```
0 satis_demo $ tree
.
└── Hello
    └── HelloWorld.php

1 directories, 1 file
```
- 2、编辑HelloWorld.php文件
- 3、初始化Composer
```
方法一 使用命令：composer init
方法二 在项目根目录下创建一个composer.json文件
```
- 4、编辑composer.json文件
- 5、安装composer文件
```
composer install
```
- 6、在项目根目录下创建测试文件tests/test.php
- 7、在项目根目录下运行测试文件
```
php tests/test.php
返回结果:Hello World
```