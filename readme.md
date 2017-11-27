## A Simple TDD Todo Application with VueJs and Laravel

## About Daily Planner App

Daily Planner is a simple test driven development todo app where user can create a list of todo task for the day, set the time for the task, and can mark each completed task as completed. The user can also delete each todo task.

## TDD Feature Test

- User can create todo task.
- User can delete todo task.
- User can see all created todo task.

## TDD Validation Test
- Task name input field must not be empty.
- The hour, minute input field must not be empty and must be numerical.
- The period input field must not be empty

## How to Install the application
- Open Git Bash or Command line.
- Change the current working directory to the location where you want the cloned directory to be made.
- Type  git clone https://github.com/onwuvic/Todo.git or click Clone or download and download the zip file
- Navigate to the directory $ cd Todo.
- Type $ composer install
- Go to the working directory root folder and rename the .env.example to .env
- Run the following command to generate your app key: php artisan key:generate
- install nodeJs on your computer
- Run the following command to get your node dependencies: npm install
- download Xampp or Wampp if you are using mysql to handle your database info, create your database, username and password (feel free to use any other database).
- Go to .env file and type your database credentials: DB_CONNECTION=mysql (you can change this if you are using other database), DB_DATABASE=homestead (your database name), DB_USERNAME=homestead (your database username), DB_PASSWORD=secret (your database password).
- Run the following command to set up the database schema: php artisan migrate.
- Check if all test passed run: phpunit or vendor\bin\phpunit
- Then start your server: php artisan serve
- visit: http://127.0.0.1:8000 on your browser.
## And You Have Your Todo App Live!!!!

## App Sample

<p align="center">
<img src="https://res.cloudinary.com/dwf8aqhry/image/upload/v1511796011/frontpage_fvgmzk.png">
<img src="https://res.cloudinary.com/dwf8aqhry/image/upload/c_scale,h_1553/v1511796276/createtask_g3j0of.png">
<img src="https://res.cloudinary.com/dwf8aqhry/image/upload/c_scale,h_1076/v1511797205/todotask_f1smkc.png">
</p>