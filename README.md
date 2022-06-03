#Test URL Parsers

Написал набор классов, обеспечивающих парсинг ссылок на видео по предоставленному тестовому заданию.<br>
Можно добавить ссылок в index.php и проверить работу. Контейнер использует volume, так что пересобирать образ каждый раз не требуется.<br>

Запускается на `localhost:8000`

Команды:
1. Сборка образа: `docker build -t test-lenvendo-image .`
2. Запуск контейнера: `docker run --rm -d -p 8000:8000 -v $(pwd):/var/www --name test-lenvendo-container test-lenvendo-image`
3. Завершение работы: `docker stop test-lenvendo-container`