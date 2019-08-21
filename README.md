# aliyun-sdk-core

#### 项目介绍

阿里云SDK核心包


#### 安装教程

composer require siaoynli/aliyun-sdk-core

#### 使用说明

config/app.php add

AliCloud\Core\LaravelAliCloudServerProvider::class,


run:

php artisan vendor:publish --provider='AliCloud\Core\LaravelAliCloudServerProvider'
