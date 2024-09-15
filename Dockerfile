   # Используем официальный образ PHP с Apache
   FROM php:8.0-apache

   # Копируем файлы вашего приложения в образ
   COPY . /var/www/html/

   # Указываем, что нужно открывать 80 порт
   EXPOSE 80

   PODMAN build -t testriostat-app .

   podman run -d -p 8080:80 --name testriostat my-app

