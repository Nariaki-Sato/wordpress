#!/bin/bash

echo "=> Creating database wordpress"
mysql -uroot -e "CREATE DATABASE wordpress"
mysql -uroot wordpress < /dump.sql
