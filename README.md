# Docker WordPress

## Build & Run WordPress Docker image

```
$ git clone https://github.com/rakuishi/wordpress.git docker-wordpress
$ cd docker-wordpress
$ docker build -t docker-wordpress .
$ docker run -d -p 80:80 -v $(pwd):/data-share --name=docker-wordpress docker-wordpress
$ docker-machine ip default
192.168.99.100
$ open http://192.168.99.100/
```

## Extracting WordPress data and wp-content/

```
$ docker exec docker-wordpress sh -c "mysqldump -u root wordpress > /data-share/dump.sql"
$ mkdir public_html
$ docker exec docker-wordpress sh -c "cp -r /app/wp-content/ /data-share/public_html/"
```

## Uncommenting for using extracted data

Dockerfile:

```
# ADD public_html/wp-content /app/wp-content
```

mysql-setup.sh:

```
# mysql -uroot wordpress < /dump.sql
```

## Rebuild & Run WordPress with user’s WordPress data

```
$ docker rm -f docker-wordpress
$ docker rmi docker-wordpress
$ docker build -t docker-wordpress .
$ docker run -d -p 80:80 -v $(pwd)/public_html/wp-content:/app/wp-content/ -v $(pwd)/dump.sql:/dump.sql --name=docker-wordpress docker-wordpress
```

## Thanks

* https://github.com/tutumcloud/wordpress
* http://www.slideshare.net/mookjp/dockerword-press
