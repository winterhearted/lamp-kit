#!/bin/bash
set -e

# Выводим отладочную информацию
echo "Starting Apache with the following settings:"
echo "DOMAIN_NAME: $DOMAIN_NAME"
echo "PUBLIC_PATH $PUBLIC_PATH"

# Формируем массив параметров запуска
HTTPD_ARGS=()

# Всегда добавляем доменное имя
HTTPD_ARGS+=("-D" "DOMAIN_NAME=$DOMAIN_NAME")

HTTPD_ARGS+=("-D" "PUBLIC_PATH=$PUBLIC_PATH")

# Выводим итоговую команду для отладки
echo "Running command: httpd-foreground ${HTTPD_ARGS[@]}"

# Запускаем Apache с нужными параметрами
exec httpd-foreground "${HTTPD_ARGS[@]}"
