# Slim Blog

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributions](#contributions)
- [License](#license)

## Overview
This project is a simple blog system built with PHP and the Slim framework. It allows users to view a list of blog posts, see individual post details, and manage comments. The system is designed with a minimal setup for easy extension and customization. It leverages the Blade template engine for rendering views and follows a basic MVC architecture.

### Features
- **Post Management**: Users can view a list of blog posts, create, edit, update, and delete posts.
- **Comment Management**: Users can add, edit, update, and delete comments on posts.
- **User Authentication**: Includes login, registration, and session-based authentication.
- **Authorization Middleware**: Ensures that only logged-in users can create, edit, and delete posts or comments.
- **Blade Templating**: Views are rendered using the Blade templating engine.
- **Basic MVC Architecture**: The project follows the Model-View-Controller pattern for code organization.

## Usage
1. **Setup and Deployment**:
    - Clone the repository to your local machine.
    - Ensure you have PHP 8.3+ installed.
    - Run `composer install` to install the required dependencies.
    - Configure your database (e.g., MySQL, PostgreSQL) if necessary for managing posts and comments.
    - Set up the necessary environment variables and database settings in the configuration files.
    - Run the application using your web server (e.g., Apache, Nginx, or PHP's built-in server).

2. **Access the Application**:
    - The application can be accessed locally at `http://localhost:8000` or the configured address.

3. **Interacting with the Application**:
    - **GET** `/`: View the homepage, listing all blog posts.
    - **GET** `/posts/{id}`: View a specific post by its ID.
    - **GET** `/posts/create`: Create a new blog post.
    - **POST** `/posts`: Store a new blog post.
    - **GET** `/posts/{id}/edit`: Edit an existing blog post.
    - **PUT** `/posts/{id}`: Update a blog post.
    - **DELETE** `/posts/{id}`: Delete a blog post.
    - **POST** `/comments`: Add a comment to a post.
    - **GET** `/comments/{id}/edit`: Edit a comment.
    - **PUT** `/comments/{id}`: Update a comment.
    - **DELETE** `/comments/{id}`: Delete a comment.
    - **GET** `/login`: Show the login form.
    - **POST** `/login`: Log in to the application.
    - **GET** `/register`: Show the registration form.
    - **POST** `/register`: Register a new user.
    - **GET** `/logout`: Log out of the application.

## File Structure
- `public/`: Publicly accessible files for the project.
    - `index.php`: Main entry point for the application, where routing and request handling occur.

- `app/`: Application logic for controllers, models, and helpers.
    - `Http/`: Contains the controllers and logic for handling HTTP requests.
        - `Controllers/`: Contains the controller classes.
            - `AuthController.php`: Handles login, registration, and logout.
            - `BlogController.php`: Manages the blog posts (create, read, update, delete).
            - `CommentController.php`: Manages the comments (create, update, delete).
    - `Models/`: Contains the model classes for managing data.
        - `Post.php`: Model class for blog post-related operations.
        - `Comment.php`: Model class for managing comments.
        - `User.php`: Model class for managing users and their sessions.
    - `Services/`: Contains business logic and services.
        - `AuthService.php`: Contains authentication logic for handling user login and registration.
    - `helpers.php`: Contains helper functions used across the application.
    - `middlewares.php`: Middleware configuration to enforce authentication.
    - `routes.php`: Contains the route definitions for the application.
    - `settings.php`: Application settings and configuration.
    - `views/`: Contains Blade templates for rendering HTML views.
        - `auth/login.blade.php`: Login form view.
        - `auth/register.blade.php`: Registration form view.
        - `home/index.blade.php`: Homepage displaying all posts.
        - `layouts/app.blade.php`: Layout template for wrapping content.
        - `posts/create.blade.php`: Form for creating a new post.
        - `posts/edit.blade.php`: Form for editing a post.
        - `posts/show.blade.php`: Template for displaying a single post.

- `composer.json`: Composer configuration file for managing dependencies.

## Contributions
Contributions, feedback, and suggestions are welcome. If you have any improvements or find issues, please submit a pull request or open an issue.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
