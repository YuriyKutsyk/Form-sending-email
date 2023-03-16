## Requirements:
* PHP 8.1
* Composer
* MySQL 8.0+

## 1. Clone the git repository:
https://github.com/YuriyKutsyk/Form-sending-email.git

Switch to the project directory:
```
cd [project directory]
```

## 2. Install all the composer dependencies:

Install the composer (if it is not exists on the server):

[Composer installation manual](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

Install composer dependencies:
```
composer install
```

## 3. Configure Laravel Project

Install [PHPMailer](https://github.com/PHPMailer/PHPMailer) Package

## 4. Configure gmail account
```
You must generate a new app password.
This can be done as follows:
1. Log in to gmail.
2. Go to Manage you google account.
3. Select Security on the left.
4. Then select App password.
5. Add new (select app->mail, select device->other = generate)
We need this password in our .env file
```

## 4. Create the .env file to set the project configuration

Example:

```
# App
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:E7iWgdYlXko8hf6HeoHb/0+sT7EOubbLFudawxm+x28=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mail
DB_USERNAME=root
DB_PASSWORD=

# Other
BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

# Redis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

# Mail
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=example@gmail.com //Try your address for example
MAIL_PASSWORD=vdbqdkffysbncjdg //Your generated password
MAIL_FROM_ADDRESS="test@gmail.com"
MAIL_FROM_NAME="Test"

# AWS Configuration
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false
```

## 5. Configure database
```
Execute the code in the maildatabase.sql file in database directory.
```

## 5. Configure routes and blades files
