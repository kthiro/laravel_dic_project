#!/bin/bash

# MySQL用の環境変数を自分の環境用に編集する。先に sportweb/.env を編集しておく必要がある。

# まずは.envで定義した環境変数を呼べるようにする。
export $(cat sportweb/.env | grep DB)

export DB_HOST=$DB_HOST # （設定不要）sportweb/.envから呼ぶ。
export DB_PORT=$DB_PORT # （設定不要）sportweb/.envから呼ぶ。

export DB_ROOT_USER_PASS=rootuserpassword # rootユーザー用のパスワード

export DB_EXTERNAL_USER=exuser # 外部ホストからの接続用ユーザー名
export DB_EXTERNAL_USER_HOST=% # 外部ホストユーザーのホスト
export DB_EXTERNAL_USER_PASS=exuserpassword # 外部ホストユーザーのパスワード

export DB_NAME=$DB_DATABASE # （設定不要）sportweb/.envから呼ぶ。
export DB_USER=$DB_USERNAME # （設定不要）sportweb/.envから呼ぶ。
export DB_USER_HOST=localhost # アプリ用DBユーザーのホスト
export DB_USER_PASS=$DB_PASSWORD # （設定不要）sportweb/.envから呼ぶ。
