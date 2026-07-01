# 🌐 CloudWorld - First Laravel Project

CloudWorld is my first Laravel project, built to learn the fundamentals of the Laravel framework. It demonstrates routing, Blade templating, layouts, and reusable components while creating a simple multi-page website.

## 🚀 Features

* Home Page
* About Page
* Services Page
* Pricing Page
* Contact Page
* Reusable Header and Footer
* Master Layout using Blade
* Clean and Responsive Design

## 🛠️ Technologies Used

* Laravel
* PHP
* Blade Template Engine
* HTML5
* CSS3
* JavaScript

## 📁 Project Structure

```text
resources/
└── views/
    ├── app/
    │   ├── home.blade.php
    │   ├── about.blade.php
    │   ├── services.blade.php
    │   ├── pricing.blade.php
    │   └── contact.blade.php
    │
    ├── Layout/
    │   └── app.blade.php
    │
    └── partials/
        ├── header.blade.php
        ├── footer.blade.php
        └── scripts.blade.php

routes/
└── web.php
```

## ⚙️ Installation

Clone the repository:

```bash
git clone https://github.com/MalikMubashir99/1st-Laravel-Project.git
```

Move into the project directory:

```bash
cd 1st-Laravel-Project
```

Install PHP dependencies:

```bash
composer install
```

Install Node.js dependencies:

```bash
npm install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Start the development server:

```bash
php artisan serve
```

Compile frontend assets:

```bash
npm run dev
```

Open your browser and visit:

```text
http://127.0.0.1:8000
```

## 📸 Screenshots

Add screenshots of your application here to showcase the user interface.

## 📚 What I Learned

* Laravel project structure
* Routing
* Blade layouts
* Blade partials
* Template inheritance
* Git & GitHub basics
* Frontend asset management with Vite

## 👨‍💻 Author

**Mubashir Idrees**

GitHub: https://github.com/MalikMubashir99

## 📄 License

This project is for learning purposes and is open-source under the MIT License.
