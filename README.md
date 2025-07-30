# Laravel User Activity Log 📋

![Laravel Version](https://img.shields.io/badge/laravel-8%2B%20%7C%209%2B%20%7C%2010%2B-blue.svg)
![PHP Version](https://img.shields.io/badge/php-7.4%2B%20%7C%208.x-blue.svg)
![License](https://img.shields.io/github/license/varunazad/laravel-user-activity-log)

A simple and extensible **Laravel package** to log user and customer activities automatically—similar to Laravel Telescope but lightweight and focused on customer-level activity tracking.

---

## 🚀 Features

- ✅ Logs all authenticated user activities
- 🧠 Tracks request method, route, user ID, IP, browser, etc.
- 🔍 View logs easily in DB or optional web view
- 🔧 Configurable via `config/user-activity-log.php`
- 📦 Supports publishing config and migrations

---

##  ⚙️ Configuration
  **Publish the config and migration files:**
  
    php artisan vendor:publish --tag=user-activity-log-config
    php artisan migrate
  
   **This will:**
    Create config/user-activity-log.php
    Run the log table migration (user_activity_logs)

  
---    

##  🧩 Usage
  **Use Trait like this:**
  
    use Varunazad\LaravelUserActivityLog\Traits\LogsActivity;

    class User extends Authenticatable
    {
        use LogsActivity;
    }
  
   **This will:**
    The logging is automatic for each request made by an authenticated user. You can customize which actions to log in the config.

  
---   

## 🛠️ Config Options
    
    return [
    'enabled' => true,
    'log_guests' => false,
    'log_methods' => ['GET', 'POST', 'PUT', 'DELETE'],
    'excluded_routes' => ['login', 'logout'],
    'user_model' => App\Models\User::class,
]  ];
  
--- 


## 📦 Installation

```bash
composer require varunazad/laravel-user-activity-log


---




