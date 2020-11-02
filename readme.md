# eventsapplaravel
A Laravel Application for storing proposed events to attend.

## Steps to Cloning The Laravel Project

#### Clone GitHub repo
The github repo is `git clone https://github.com/timiosaze/eventsapplaravel.git`
_Note: Make sure you have git installed locally on your computer first._

#### Cd into the project
The code is `cd eventsapplaravel`

#### Install Composer Dependencies
This is done with the following command `composer install`

#### Install NPM Dependencies
This is done with the following command `npm install`

#### Create a copy of your .env file
This is done by running the following command `cp .env.example .env`

#### Generate an app encryption key
This is done with the following command `php artisan key:generate`

#### Create an empty database for our application
If mysql is installed in your system globally. You can run `mysql -u root`
and create database automatically by running mysql command `create database testdb;` will create a database with name __testdb__. Or you can create it locally in your database env like sequelpro, xampp etc.

#### In the .env file, add database information to allow Laravel to connect to the database
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. 

#### Migrate the database
You need to migrate the database using the following code `php artisan migrate`

#### Seed the database
After the migrations are complete and you have the database structure required, then you can seed the database (which means add dummy data to it).
Run the following code `php artisan db:seed`
Your login details email will be __example@example.com__ and your password will be __password__