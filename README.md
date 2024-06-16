# E-commerce Dashboard

This is a web-based e-commerce dashboard built with Laravel and Filament. It provides CRUD (Create, Read, Update, Delete) functionality for products, categories, and users. Additionally, it includes search and filtering capabilities for products.

## Features

-   Product CRUD: Create, read, update, and delete products.
-   Category CRUD: Create, read, update, and delete categories.
-   User CRUD: Create, read, update, and delete users.
-   Product Search: Search for products based on specific category.
-   Product Filters: Apply filters to narrow down product search results.

## Getting Started

## Getting Started

To run the project locally, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/NourhanAymanElstohy/ecommerce-dashboard
    ```

2. Install the project dependencies using Composer:

    ```bash
    composer install
    ```

3. Create a copy of the `.env.example` file and rename it to `.env`. Update the necessary configuration values such as database credentials.

    ```bash
    cp .env.example .env
    ```

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Run the database migrations (**Set the database credentials in .env before migrating**):
    ```bash
    php artisan migrate
    ```
6. Run the database seeds:

    ```bash
    php artisan db:seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Access the application in your web browser at `http://localhost:8000`.

## Usage

Login with Super Admin email and password:

```
    email: admin@gmail.com
    password: password
```
