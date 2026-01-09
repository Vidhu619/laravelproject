login id  for testing
user:vidhukrishnan619849@gmail.com
pass: admin123456

1. Clone the repository
   git clone https://github.com/Vidhu619/laravelproject.git

2. Install backend dependencies
   composer install

3. Install frontend dependencies (Laravel Breeze)
   npm install

4. Create environment file
   cp .env.example .env

5. Create SQLite database
   touch database/database.sqlite

6. Generate application key
   php artisan key:generate

7. Run migrations
   php artisan migrate

8. Run frontend build
   npm run dev

9. Start the server
   php artisan serve

URL: http://127.0.0.1:8000



The following endpoint returns data in JSON format.
http://127.0.0.1:8000/api/test
  eg :
  [
  {
    "id": 18,
    "user_id": 3,
    "title": "Building Projects",
    "content": "Working on real projects helps in understanding concepts better. Projects turn theory into practical experience.",
    "created_at": "2026-01-09T06:56:01.000000Z",
    "updated_at": "2026-01-09T06:56:01.000000Z",
    "user": {
      "id": 3,
      "name": "Vidhu Krishnan"
    }
  },
  {
    "id": 17,
    "user_id": 3,
    "title": "Importance of Practice",
    "content": "Practice is the key to mastering any skill. The more you practice, the more confident and skilled you become.",
    "created_at": "2026-01-09T06:55:28.000000Z",
    "updated_at": "2026-01-09T06:55:28.000000Z",
    "user": {
      "id": 3,
      "name": "Vidhu Krishnan"
    }
  },
  {
    "id": 16,
    "user_id": 1,
    "title": "Technology Makes Life Easier",
    "content": "Technology helps us save time and solve problems faster. From mobile apps to web platforms, technology plays an important role in our daily lives.",
    "created_at": "2026-01-09T06:54:06.000000Z",
    "updated_at": "2026-01-09T06:54:06.000000Z",
    "user": {
      "id": 1,
      "name": "admin"
    }
  },
  {
    "id": 15,
    "user_id": 1,
    "title": "My First Blog Post",
    "content": "This is my first blog post using my own blog software. I am excited to build, improve, and add more features in the future. Thank you for reading and supporting my journey.",
    "created_at": "2026-01-09T06:53:48.000000Z",
    "updated_at": "2026-01-09T06:53:48.000000Z",
    "user": {
      "id": 1,
      "name": "admin"
    }
  },
  {
    "id": 13,
    "user_id": 2,
    "title": "dsffeds",
    "content": "rgfdsfd",
    "created_at": "2026-01-08T17:44:08.000000Z",
    "updated_at": "2026-01-08T17:44:08.000000Z",
    "user": {
      "id": 2,
      "name": "vidhu"
    }
  }
]


