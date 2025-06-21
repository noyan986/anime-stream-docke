# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy your code into the Apache web root
COPY . /var/www/html/

# Enable required permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default for HTTP)
EXPOSE 80
