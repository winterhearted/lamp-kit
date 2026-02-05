# LAMP Kit

Docker stack for local PHP development: Apache + PHP-FPM + MariaDB + phpMyAdmin.

## Stack

| Service | Image | Description |
|---------|-------|-------------|
| site-apache | `httpd:2.4` | Apache web server |
| site-php | `winterhearted/php-fpm` | PHP-FPM with extensions |
| site-mariadb | `mariadb` | MariaDB database |
| site-phpmyadmin | `phpmyadmin/phpmyadmin` | Database web interface |

## Quick Start

1. Copy `.env.example` to `.env`:
   ```bash
   cp .env.example .env
   ```

2. Edit `.env` for your project

3. Start containers:
   ```bash
   docker compose up -d
   ```

4. Site available at `http://<DOMAIN_NAME>`, phpMyAdmin at `http://pma.<DOMAIN_NAME>`

## Environment Variables

### Common

| Variable | Description |
|----------|-------------|
| `DOMAIN_NAME` | Site domain name |

### Apache

| Variable | Description |
|----------|-------------|
| `PUBLIC_PATH` | Public directory relative to htdocs |
| `ENABLE_AUTOLOCALHOST` | Enable autolocalhost integration |
| `ENABLE_AUTOLOCALHOST_SSL` | Enable SSL via autolocalhost |
| `AUTOLOCALHOST_FORCE_SSL` | Force HTTPS redirect |
| `HTTP_PORT` | External HTTP port |
| `HTTPS_PORT` | External HTTPS port |

### PHP

| Variable | Description |
|----------|-------------|
| `PHP_VERSION` | PHP version (image tag) |
| `PHP_TIMEZONE` | PHP timezone |
| `PHP_ENABLE_OPCACHE` | Enable OPcache |
| `PHP_ENABLE_JIT` | Enable JIT compilation |
| `PHP_MAX_EXECUTION_TIME` | Max execution time (seconds) |
| `PHP_MEMORY_LIMIT` | Memory limit |
| `PHP_POST_MAX_SIZE` | Max POST size |
| `PHP_UPLOAD_MAX_FILESIZE` | Max upload file size |

### MariaDB

| Variable | Description |
|----------|-------------|
| `MARIADB_VERSION` | MariaDB version |
| `MARIADB_ROOT_PASSWORD` | Root password |
| `MARIADB_USER` | Database user |
| `MARIADB_PASSWORD` | User password |
| `MARIADB_DATABASE` | Database name |
| `MARIADB_PORT` | MariaDB port |

## Project Structure

```
.
├── docker/
│   ├── apache/
│   │   ├── httpd.conf         # Apache configuration
│   │   └── start-apache.sh    # Startup script
│   ├── mariadb/
│   │   ├── data/              # Database files (gitignore)
│   │   └── init-scripts/      # SQL init scripts (.sql, .sql.gz)
│   ├── phpmyadmin/
│   │   └── config.user.inc.php
│   └── logs/
│       └── apache/            # Apache logs
├── htdocs/                    # Site source code
├── docker-compose.yml
├── .env.example
└── .env
```
