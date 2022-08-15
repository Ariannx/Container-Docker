# Container-Docker

This is a basic web App based on WAMP stack environment built using Docker Compose. It consists following:

* Apache v2.4
* MySQL v8
* PHP v7.2
* phpMyAdmin

## Installation

Clone this repository on your local computer. Run the `docker-compose up`.

```shell
git clone https://github.com/Ariannx/Container-Docker.git
cd Container-Docker/
git fetch --all
docker-compose up
```

The  web App is now ready!! You can access it via `http://localhost`.

## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.

http://localhost:8080/  
username: root  
password: tiger
