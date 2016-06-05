# The project "registoColaboradores".

This application is a database for employees registration and it's purpose is to show my work in laravel.
To be used in a real context, it would need developments adjusted to a Company's needs.

## Here's some of laravel resources exploited in this project:

- Creation and configuration of an application on Laravel;
- Configuration Routes in routes.php file;
- Use of Redirects;
- Use of the MVC pattern and how it applies to framework;
- Use of the repository pattern;
- Creation and using Eloquent model, migrations and Seeders;
- Taking advantage of Eloquent, a powerful framework ORM;
- Using the Blade, a standard template engine Laravel;
- File manipulation with laravel resources;
- Creation of data validation with Form Requests;
- Taking care of authentication and security with Middleware;
- Using paginate laravel.


## Explanation for modles and tables names

To explain the logic behind the models' names, I'm going to use "reg-emplo" example. This standardization is about picking up the three first letters of the "RegistrationStaff" database's name, therefore "reg" and the left five letters "emplo" from the table name "employee". By generating the table, Laravel adds the "s". This logic helps us standardize the tables' names but also makes it easier to understand to which database some table belongs to.
Name in the tables fields are also standardized and it is possible to verify to which table it belogns e what's the type of data in that field. 

Takinf for example the field "c_name_emplo", we can see that the letter "c" identifies the type of data "CHAR"; the word "name" identifies the field's name; and the abbreviation "emplo" identifies de table, which is "reg_emplos".

## Steps to the project configuration

+ 1 - composer install.

+ 2 - Change the file name to .env.example .env and change the following lines to the database settings:
  * DB_HOST=localhost
  * DB_DATABASE=homestead
  * DB_USERNAME=homestead
  * DB_PASSWORD=secret
  
+ 3 - Run the following command to create the tables and their populations in the database:
  * php artisan migrate
  * php artisan db:seed
  
+ 4 - Run the following command;
  * php artisan key:generate

+ 5 - Optional - Laravel Development Server
  * php artisan serve



