# Usa un'immagine di base che includa un server web (ad esempio, Nginx)
FROM nginx:latest

# Crea una directory per il tuo sito web all'interno del container
RUN mkdir /usr/share/nginx/html/sitoweb

# Copia i file del sito web nella directory appena creata nel container
COPY Ai_Library /usr/share/nginx/html/sitoweb/


