FROM ubuntu/apache2:latest 

WORKDIR /root

RUN apt update && apt install -y sqlite3 php php-sqlite3 git

RUN git clone --branch gwitter --depth 1 \
    https://github.com/prasantadh/2023-summer.git

RUN cp -r 2023-summer/1.gwitter/prasantadh/* /var/www/html && \
    rm /var/www/html/index.html

WORKDIR /var/www/html

COPY database.sql database.sql

RUN sqlite3 gwitter.db < database.sql

