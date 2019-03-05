#!/bin/bash

# パッケージリストの更新
sudo apt-get update && sudo apt-get -y upgrade

# software-properties-commonパッケージをインストール（add-apt-repositoryコマンドを使用するため）
sudo apt-get install software-properties-common

# ppa:ondrej/php リポジトリを追加（PHP7.3をインストールするためにこの外部リポジトリが必要）
sudo add-apt-repository -y ppa:ondrej/php

# パッケージリストを更新
sudo apt-get update

# nginxのインストール
sudo apt-get -y install nginx

# PHPのインストール
sudo apt-get -y install php7.3
sudo apt-get -y install php-pear php7.3-curl php7.3-dev php7.3-gd php7.3-mbstring php7.3-zip php7.3-mysql php7.3-xml unzip

# MySOLのインストール
sudo apt-get -y install mysql-server mysql-client

# mysqld.cnfの編集：ホストOSからもMySQLへアクセスできるよう、bind addressを192.168.37.10へ変更
sudo sed -i 's/127.0.0.1/192.168.38.10/' /etc/mysql/mysql.conf.d/mysqld.cnf

# mysqlの再起動
sudo service mysql restart

# composerのインストール
cd /vagrant && curl -sS https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer

# (参考)composerのアップデートコマンド
# composer self-update

# Laravelのインストール
composer global require laravel/installer

# パスの追加(laravelコマンドを使用できるようにする)
# TODO: 恒久的なパスとするためには、 ~/.profile 内での定義が必要
export PATH="$PATH:~/.config/composer/vendor/bin/"
