#!/bin/bash

# MySQL用の環境変数を自分の環境用に編集する
export DB_HOST=localhost # MySQLのサーバーのホスト
export DB_PORT=3306 # MySQLのポート

export DB_ROOT_USER_PASS=rootuserpassword # rootユーザー用のパスワード

export DB_EXTERNAL_USER=exuser # 外部ホストからの接続用ユーザー名
export DB_EXTERNAL_USER_HOST=% # 外部ホストユーザーのホスト
export DB_EXTERNAL_USER_PASS=exuserpassword # 外部ホストユーザーのパスワード

export DB_NAME=dbname # アプリ用のデータベース名
export DB_USER=dbuser # アプリ用DBを操作するためのユーザー
export DB_USER_HOST=localhost # アプリ用DBユーザーのホスト
export DB_USER_PASS=dbuserpassword # アプリ用DBユーザーのパスワード
