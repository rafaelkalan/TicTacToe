# Tic Tac Toe

## The challenge

We want to play Tic Tac Toe. We want to be able to play without distance being a challenge to find the best players in the world ;)

### Tic Tac Toe functionality
The functional requirements that we want for our tic tac toe application are:
  - Create and delete matches -- Working on it
  - Join a match -- Working on it
  - Make moves and alter the game board -- Working on it
  - Identify the winner -- Working on it

## Getting Started

[Install docker and docker-compose](https://docs.docker.com/compose/install/)

Then run
```bash
./setup
```
This will take a few minutes. It will create the containers and set them up for use.

When the setup finished, run the application with:
```bash
./up
```

And the application will be running at [http://localhost:8080](http://localhost:8080).

**Note:** If the port 8080 is already in use, change the configuration in docker-compose.yml file. For example, to use the port 9090:
```yaml
ports:
  - 9090:80
``` 
## Built With

* [Laravel](https://laravel.com/docs/5.6) - The PHP Framework For Web Artisans.
* [Docker](https://docs.docker.com/compose/install/) - Containers to run the app.
* [VueJs](https://vuejs.org/v2/guide/) - Js framework used for the Application.
* [PHP](http://php.net/docs.php) - API Language

## Versioning

[Git](https://git-scm.com/) was used for versioning. For available versions, see the [TicTacToe](https://github.com/rafaelkalan/TicTacToe). 

## Authors
* **Rafael Oliveira Mendes Lima** - *API* - [Rafael Kalan](https://github.com/rafaelkalan)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Laravel and PhP 7
    * The project development using the technologies cited above taught a lot about the software architecture and functions development using PHP language and the language frameworks.
* Docker
    * Configuring and working with docker showed that it is a difficult technology to work on Windows, but was enlightful about how it operates.
* Special thanks for Lucas and Páfu who encoraged me to try and do my best.
