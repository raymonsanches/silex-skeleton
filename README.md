## Running Project

This project was built using docker containers to easily handle
environment configurations. So, you will need docker installed on your
machine to install.

### Docker configuration

Once you've hande installed and configured Docker, you can proceed.

#### Build image based on Dockerfile

This stel will create locally on you machine a docker image based on 
project configurations.

`docker build -t skeleton .`

#### Up containers with docker compose

`docker-compose up -d`

If you need to recreate your containers, for some reason.

`docker-compose up -d --force-recreate`

#### Add some entry to your hosts file

Edit your hosts file, normally in /etc/hosts on *nix systems to add these line

`127.0.0.1 dev.skeleton`

All done!