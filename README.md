# HydroServerLite
A PHP based web interface for HydroServer

## Installation

### Local Development Setup
HSL now contains a docker-compose that will help you setup the required containers on your system. Before running the docker-compose commands, please ensure that you have docker installed for your OS. 

1. [Click Here](https://docs.docker.com/install/) to find out more on how to install docker. 
1. Once you have docker installed, pull the code from the [repo](https://github.com/BYU-Hydroinformatics/HydroServerLite)
1. CD into the directory that you have cloned, and run: 
    ```
    docker-compose up
    ```
    This step might take a while depending on your network connection and if you previously have the images required 
    by the containers or not. 
1. Once the containers are up, try bringing up the PHPMyAdmin interface by going to `localhost:8080`
1. Create a new database named hsl (This is if you want a blank new database.)
1. Try going to `http://localhost/index.php/default/home/installation`
1. Fill in the installation details. Select `Yes` for `Use Default database connection?`. Take note of the site name that you use. 
1. The installation should process data files and complete. Now you should see a new database on your [PHPMyAdmin](localhost:8080) with the same name as your sitename
1. You may want to copy over some sample data that we have included for your database. 
    1. Go to [PHPMyAdmin](localhost:8080)
    2. From the menu on the left select your database (This should match the name above in step 7)
    3. Click on import on the menu on the top of the page. This should bring you to a database import page. 
    4. Browse to the file `yellowstone.sql` and ensure that `Enable foreign key checks` is NOT checked, and hit `Go`



## Contributors

### Current
- Rohit Khattar
- Hart
- Jiri Kadlec
- Rex Burch

## License
[Click Here for License](LICENSE.md)