# AdaLanka Docker Setup

This Laravel application is fully dockerized for easy development and deployment.

## TL;DR - Quick Commands

```bash
# 1. Setup environment
cp .env.docker .env

# 2. Build and start services
docker compose up --build -d

# 3. Generate app key
docker compose exec app php artisan key:generate

# 4. Run migrations
docker compose exec app php artisan migrate

# 5. Start development mode with live sync
docker compose down && docker compose up --watch
```

**🎉 Your app will be ready at http://localhost:8000**

## Requirements

- Docker Engine 20.10.0 or higher
- Docker Compose 2.0 or higher

## Quick Start

Follow these steps in order:

### 1. Environment Setup

Copy the Docker environment file:
```bash
cp .env.docker .env
```

### 2. Build and Start Services

Build the Docker images and start all services:
```bash
docker compose up --build -d
```

### 3. Generate Application Key

Generate Laravel application key:
```bash
docker compose exec app php artisan key:generate
```

### 4. Initialize Database

Run database migrations:
```bash
docker compose exec app php artisan migrate
```

(Optional) Run seeders:
```bash
docker compose exec app php artisan db:seed
```

### 5. Start Development Mode with Live Sync

Stop the current containers and start with the new develop feature:
```bash
docker compose down
docker compose up --watch
```

The `--watch` flag activates the `develop` feature for real-time code synchronization. Your local changes in the following directories will be automatically synced:
- `./app` → `/var/www/html/app`
- `./resources` → `/var/www/html/resources`
- `./routes` → `/var/www/html/routes`
- `./config` → `/var/www/html/config`
- `./database` → `/var/www/html/database`

**🎉 Your application is now ready at http://localhost:8000**

## Services

The Docker setup includes the following services:

| Service | Port | Description |
|---------|------|-------------|
| **app** | 8000 | Laravel application (Nginx + PHP-FPM) |
| **db** | 3306 | MySQL 8.0 database |
| **redis** | 6379 | Redis for caching and sessions |
| **phpmyadmin** | 8080 | Database management interface |
| **mailhog** | 8025 | Email testing tool |

## Access Points

- **Application**: http://localhost:8000
- **phpMyAdmin**: http://localhost:8080
- **MailHog**: http://localhost:8025

## Common Commands

### Laravel Commands
```bash
# Run artisan commands
docker compose exec app php artisan <command>

# Install PHP dependencies
docker compose exec app composer install

# Install Node.js dependencies
docker compose exec app npm install

# Build assets
docker compose exec app npm run build

# Run tests
docker compose exec app php artisan test
```

### Database Commands
```bash
# Access MySQL console
docker compose exec db mysql -u adalanka -p adalanka

# Import database
docker compose exec -T db mysql -u adalanka -p adalanka < database.sql

# Export database
docker compose exec db mysqldump -u adalanka -p adalanka > database.sql
```

### Container Management
```bash
# View running containers
docker compose ps

# View logs
docker compose logs app
docker compose logs db

# Stop all services
docker compose down

# Stop and remove volumes
docker compose down -v

# Rebuild containers
docker compose up --build -d
```

## Development Features

### Live Code Synchronization
The `develop` feature in `docker-compose.yml` provides:
- Real-time code sync without Docker volumes
- Automatic rebuilds on package.json/composer.json changes
- Better performance than traditional bind mounts

### Xdebug Support
Xdebug is pre-configured for development:
- Listen port: 9003
- IDE key: VSCODE
- Client host: host.docker.internal

### Hot Reloading
For frontend development with hot reloading:
```bash
docker compose exec app npm run dev
```

## Production Deployment

For production deployment, use the production stage:

```bash
# Build production image
docker build --target production -t adalanka:latest .

# Or use docker-compose with production override
docker compose -f docker-compose.yml -f docker-compose.prod.yml up -d
```

## File Structure

```
docker/
├── nginx/          # Nginx configuration
├── php/            # PHP-FPM and PHP configuration
├── supervisor/     # Supervisor configuration
└── mysql/          # MySQL configuration
```

## Troubleshooting

### Permission Issues
```bash
# Fix storage permissions
docker compose exec app chown -R www:www /var/www/html/storage
docker compose exec app chown -R www:www /var/www/html/bootstrap/cache
```

### Clear Caches
```bash
docker compose exec app php artisan cache:clear
docker compose exec app php artisan config:clear
docker compose exec app php artisan route:clear
docker compose exec app php artisan view:clear
```

### Database Connection Issues
1. Ensure database service is running: `docker-compose ps`
2. Check database credentials in `.env`
3. Verify database host is set to `db` (service name)

## Security Notes

- Change default passwords in production
- Use proper SSL certificates
- Configure firewall rules
- Update base images regularly
- Review and update PHP configurations for production use
