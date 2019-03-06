#!/bin/bash

# mysqld.cnfの編集：ホストOSからもMySQLへアクセスできるよう、bind addressを192.168.37.10へ変更
sudo sed -i 's/127.0.0.1/192.168.38.10/' /etc/mysql/mysql.conf.d/mysqld.cnf

# mysqlの再起動
sudo service mysql restart

# env.shで定義した環境変数の読み込み
sudo chmod 700  env.sh && source ./env.sh

# 外部接続用ユーザー、アプリDB、アプリDB操作用ユーザーの作成と権限付与
echo \
"CREATE USER $DB_EXTERNAL_USER@'$DB_EXTERNAL_USER_HOST' IDENTIFIED BY '$DB_EXTERNAL_USER_PASS';"\
"GRANT ALL PRIVILEGES ON *.* TO $DB_EXTERNAL_USER@'$DB_EXTERNAL_USER_HOST' WITH GRANT OPTION;"\
"CREATE DATABASE $DB_NAME;"\
"CREATE USER $DB_USER@'$DB_USER_HOST' IDENTIFIED BY '$DB_USER_PASS';"\
"GRANT ALL PRIVILEGES ON $DB_NAME.* TO $DB_USER@'$DB_USER_HOST';"\
| mysql -h $DB_HOST -u root --password=$DB_ROOT_USER_PASS -P $DB_PORT
