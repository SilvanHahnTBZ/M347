# Wir verwenden das offizielle nginx-Image als Basis
FROM nginx

# Arbeitsverzeichnis setzen, damit wir relative Pfade nutzen können
WORKDIR /usr/share/nginx/html

# Kopieren der HTML-Datei in das Webverzeichnis von nginx
COPY helloworld.html .

# Port 80 freigeben, damit man im Browser auf die Seite zugreifen kann
EXPOSE 80
