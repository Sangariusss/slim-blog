# Slim Blog

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributions](#contributions)
- [License](#license)

## Overview
This project is a simple blog system built with PHP and the Slim framework. It allows users to view a list of blog posts and view individual post details. The system is designed with a minimal setup for easy extension and customization. It leverages the Blade template engine for rendering views and follows a basic MVC architecture.

### Features
- **Post Management**: Users can view a list of blog posts and see individual post details.
- **Simple Routing**: Routes are defined to handle HTTP requests and map them to controllers.
- **Blade Templating**: Views are rendered using the Blade templating engine.
- **Basic MVC Architecture**: The project follows the Model-View-Controller pattern for code organization.

## Usage
1. **Setup and Deployment**:
    - Clone the repository to your local machine.
    - Ensure you have PHP 8.3+ installed.
    - Run `composer install` to install the required dependencies.
    - Configure your database (e.g., MySQL, PostgreSQL) if necessary for managing posts.
    - Set up the necessary environment variables and database settings in the configuration files.
    - Run the application using your web server (e.g., Apache, Nginx, or PHP's built-in server).

2. **Access the Application**:
    - The application can be accessed locally at `http://localhost:8000` or the configured address.

3. **Interacting with the Application**:
    - **GET** `/`: View the homepage, listing all blog posts.
    - **GET** `/posts`: View a list of all posts.
    - **GET** `/posts/{id}`: View a specific post by its ID.

## File Structure
- `public/`: Publicly accessible files for the project.
    - `index.php`: Main entry point for the application, where routing and request handling occur.

- `app/`: Application logic for controllers, models, and helpers.
    - `Http/`: Contains the controllers and logic for handling HTTP requests.
        - `Containers/`: Contains the controller classes.
            - `HomeController.php`: Controller for managing the homepage and posts.
    - `Models/`: Contains the model classes for managing data.
        - `Post.php`: Model class for blog post-related operations.
    - `helpers.php`: Contains helper functions used across the application.
    - `middlewares.php`: Middleware configuration.
    - `routes.php`: Contains the route definitions for the application.
    - `settings.php`: Application settings and configuration.
    - `views/`: Contains Blade templates for rendering HTML views.
        - `home/index.blade.php`: Template for the homepage displaying posts.
        - `layouts/app.blade.php`: Layout template for wrapping content.

- `composer.json`: Composer configuration file for managing dependencies.

## Contributions
Contributions, feedback, and suggestions are welcome. If you have any improvements or find issues, please submit a pull request or open an issue.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
