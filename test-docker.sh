#!/bin/bash
echo "Тестируем Docker образы..."

echo "1. Тест PHP 8.2:"
docker run --rm -v $(pwd):/app php:8.2-cli sh -c "cd /app && php -v && echo 'Версия: 8.2'"

echo -e "\n2. Тест PHP 8.3:"
docker run --rm -v $(pwd):/app php:8.3-cli sh -c "cd /app && php -v && echo 'Версия: 8.3'"

echo -e "\n3. Тест PHP 8.4:"
docker run --rm -v $(pwd):/app php:8.4-cli sh -c "cd /app && php -v && echo 'Версия: 8.4'"

echo -e "\nГотово!"
