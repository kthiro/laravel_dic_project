# 開発環境について
## 概要
ホストOSにVirtualBoxとVagrantを使用して仮想環境を構築し、ゲストOSとしてUbuntuを使用。
ゲストOS上にnginxとPHP、MySQLをインストールし、アプリケーションフレームワークとしてLaravelを使用する開発環境を構築。  

* ホストOSはOS Mojave バージョン 10.14.3 を使用
* ゲストOSはUbuntu 16.04を使用

## インストールしたソフトウェアについて

### ホストOS上でインストールしたもの
* VirtualBox バージョン 6.0.4
* vagrant バージョン 2.2.2

### ゲストOS上でインストールしたもの
* nginx バージョン 1.10.3
* MySQL バージョン 5.7.25
* PHP バージョン 7.3.2
* composer バージョン 1.8.4
* Laravel バージョン 5.8.2

## 環境構築手順
### ホストOS側での作業
1. VirtualBoxのインストール
    * インストール元：<https://www.virtualbox.org/wiki/Downloads>からのインストールが必要
    * バージョン 6.0.0 を使用
2. vagrantのインストール
    * インストール元：<https://www.vagrantup.com/downloads.html>からのインストールが必要
    * バージョン 2.2.2 を使用
3. 任意のディレクトリで次のコマンドを実行する。
    ```
    git clone git@github.com:kthiro/laravel_dic_project.git
    cd laravel_dic_project
    vagrant up
    vagrant ssh
    ```
----------------------
### ゲストOS側での作業
1. install_guestos.shを実行する。
    ```
    cd /vagrant && chmod u+x install_guestos.sh && ./install_guestos.sh
    ```
2. Laravelのプロジェクトディレクトリ（sportweb/ ディレクトリ）で composer のインストール
    ```
    cd /vagrant/sportweb
    composer install
    ```
3. アプリに必要なDBと、DB操作用ユーザーを作成する。
    * ` sportweb/.env ` の次の箇所を自身の環境用に変更する。
        * DB_HOST
            * 本アプリでは、特別な事情がない場合 ` localhost ` に指定する必要があります。
        * DB_PORT
        * DB_DATABASE
        * DB_USERNAME
        * DB_PASSWORD
    * ` env_sample.sh ` も自身の環境用に変更する。
    * 次のコマンドを実行する。
    ```
    cd /vagrant && mv env_sample.sh env.sh
    chmod u+x create_db.sh && ./create_db.sh
    ```
4. マイグレーションを実行する
    ```
    cd /vagrant/sportweb && php artisan migrate
    ```

-----------------------
### アプリケーションの起動確認
1. ゲストOS上でLaravelサーバーの起動
    ```
    php artisan serve --host=192.168.38.10 --port=8000
    ```
2. ホストOS上のブラウザから次のアドレスへアクセス
    ```
    192.168.38.10:8000/top
    ```
