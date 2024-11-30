# MSDevSec Blog

A Laravel-based blog with Docker setup for easy deployment.

## Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/yourusername/msdevsec-blog.git
cd msdevsec-blog

Copy environment files:
cp src/.env.example src/.env
Start Docker containers:
cd docker-msdevsec-blog
docker-compose up -d
Install dependencies:
docker-compose exec app composer install
docker-compose exec app npm install
Set up Laravel:
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
Access the site:
Blog: http://localhost:8000
Admin: http://localhost:8000/admin
