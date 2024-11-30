# MSDevSec Blog

Docker-powered Laravel blog for documenting tech journey.

## Quick Start

1. Clone the repository:

```bash
git clone https://github.com/yourusername/msdevsec-blog.git
cd msdevsec-blog
Copy environment file:
cp src/.env.example src/.env
Start Docker:
cd docker-msdevsec-blog
docker-compose up -d
Install dependencies:
docker-compose exec app composer install
docker-compose exec app npm install
Set up Laravel:
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
docker-compose exec app npm run dev
Access
Blog: http://localhost:8000
Features
Docker containerized
Laravel 11
MySQL database
Redis caching
Nginx web server
Development
Built with PHP 8.2
Node.js for asset compilation
TailwindCSS for styling
```
