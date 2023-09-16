# Usa un'immagine di base con supporto per web server (es. nginx)
FROM nginx

# Crea la directory per il sito
RUN mkdir -p /usr/share/nginx/html

# Copia tutti i file HTML e CSS
COPY . /usr/share/nginx/html

# Esponi la porta su cui il server web deve ascoltare (di solito la porta 80)
EXPOSE 80


