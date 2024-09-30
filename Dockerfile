# Usa l'immagine base di PHP con Apache
FROM php:8.1-apache

# Copia i file del progetto nella directory pubblica di Apache
COPY . /var/www/html/

# Imposta i permessi corretti e aggiungi la configurazione di Apache
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html && \
    echo '<Directory /var/www/html/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/custom.conf && \
    a2enconf custom.conf && \
    a2enmod rewrite

# Espone la porta 80 per il server Apache
EXPOSE 80


