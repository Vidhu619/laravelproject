

php version : 8.2.12
1. Clone the repository
   git clone https://github.com/Vidhu619/laravelproject.git

2. Install backend dependencies
   composer install

3. Install frontend dependencies (Laravel Breeze)
   npm install

4. Create environment file
   cp .env.example .env

5. Create SQLite database
  New-Item database\database.sqlite -ItemType File
  

6. Generate application key
   php artisan key:generate

7. Run migrations
   php artisan migrate

8. Start the server
   php artisan serve



URL: http://127.0.0.1:8000



The following endpoint returns data in JSON format.
http://127.0.0.1:8000/api/test
 


