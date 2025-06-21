# Use official PHP image
FROM php:8.1-cli

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Expose the port used by the PHP server
EXPOSE 10000

# Run PHP's built-in server
CMD ["php", "-S", "0.0.0.0:10000"]
