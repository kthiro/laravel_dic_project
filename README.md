# 開発環境について
## 概要
ホストOSにVirtualBoxとVagrantを使用して仮想環境を構築し、ゲストOSとしてUbuntuを使用。
ゲストOS上にnginxとPHP、MySQLをインストールし、アプリケーションフレームワークとしてLaravelを使用する開発環境を構築。  

* ホストOSはOS X El Capitan バージョン 10.11.6 を使用
* ゲストOSはUbuntu 16.04を使用

## インストールしたソフトウェアについて

### ホストOS上でインストールしたもの
* VirtualBox バージョン 6.0.0
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
    cd sportweb
    composer install
    ```
-----------------------
### アプリケーションの起動確認
1. ゲストOS上でLaravelサーバーの起動
    ```
    php artisan serve --host=192.168.38.10 --port=8000
    ```
2. ホストOS上のブラウザから次のアドレスへアクセス
    ```
    192.168.38.10:8000
    ```
