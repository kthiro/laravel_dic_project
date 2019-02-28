#!/bin/bash

# ゲストOSのアップデート
sudo apt-get upgrade

# nginxのインストール
sudo apt-get install -y nginx php-fpm

# PHPのインストール
sudo apt-get install -y php-mysql php-mbstring php-zip unzip

# MySOLのインストール
sudo apt-get install -y mysql-server mysql-client

# mysqld.cnfの編集：ホストOSからもMySQLへアクセスできるよう、bind addressを192.168.37.10へ変更
sudo sed -i 's/127.0.0.1/192.168.38.10/' /etc/mysql/mysql.conf.d/mysqld.cnf

# mysqlの再起動
sudo service mysql restart

# composerのインストール
curl -sS https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer

# (参考)composerのアップデートコマンド
# composer self-update

# Laravelのインストール
composer global require laravel/installer

# パスの追加(laravelコマンドを使用できるようにする)
export PATH="$PATH:~/.config/composer/vendor/bin/"
