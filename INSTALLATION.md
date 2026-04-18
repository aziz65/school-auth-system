# Installation Guide for School Auth System

## Prerequisites
1. **Server Requirements**:
   - PHP >= 7.4
   - Composer
   - MySQL >= 5.7 or MariaDB
   - Apache or Nginx

2. **System Requirements**:
   - Linux-based operating system (Ubuntu, CentOS, etc.)
   - Basic knowledge of terminal commands

## Step 1: Clone the Repository
Run the following command to clone the repository:
```bash
git clone https://github.com/aziz65/school-auth-system.git
cd school-auth-system
```

## Step 2: Install Dependencies
Use Composer to install the PHP dependencies:
```bash
composer install
```

## Step 3: Database Setup
1. **Create a Database**:
   - Log into your MySQL or MariaDB server:
   ```bash
   mysql -u username -p
   ```
   - Create the database:
   ```sql
   CREATE DATABASE school_auth_system;
   ```
2. **Set up .env file**:
   - Copy the example environment file:
   ```bash
   cp .env.example .env
   ````
   - Update the `.env` file with your database credentials:
   ```dotenv
   DB_DATABASE=school_auth_system
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

## Step 4: Migrate the Database
Run the database migrations:
```bash
php artisan migrate
```

## Step 5: Configure Server
### For Apache:
1. Enable the required Apache modules:
```bash
sudo a2enmod rewrite
```
2. Create a new Virtual Host configuration:
```apache
<VirtualHost *:80>
    ServerName your_domain.com
    DocumentRoot /path/to/school-auth-system/public
    <Directory /path/to/school-auth-system/public>
        AllowOverride All
    </Directory>
</VirtualHost>
```
3. Restart Apache:
```bash
sudo systemctl restart apache2
```

### For Nginx:
1. Create a new server block configuration:
```nginx
server {
    listen 80;
    server_name your_domain.com;
    root /path/to/school-auth-system/public;

    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
    }
}
```
2. Restart Nginx:
```bash
sudo systemctl restart nginx
```

## Step 6: Access the Application
Visit `http://your_domain.com` in your browser to access the application.

## Troubleshooting
- **Issue:** Database connection error.
  - **Solution:** Check `.env` file for correct credentials.

- **Issue:** 500 Internal Server Error.
  - **Solution:** Check the logs in `storage/logs/` for more details.

- **Issue:** Permission denied.
  - **Solution:** Ensure proper file permissions:
  ```bash
  sudo chown -R www-data:www-data /path/to/school-auth-system
  sudo chmod -R 755 /path/to/school-auth-system
  ```

---

This installation guide aims to assist you in setting up the School Auth System efficiently. For further assistance, refer to the official documentation or contact support.