```markdown
# Laravel Authentication Project

## Overview

This Laravel-based web application showcases robust user authentication functionalities, including user registration, login, and secure session management. The project aims to provide a secure and user-friendly authentication experience.

## Features

- **Secure Authentication**: Users can register using their email and password, and only registered users can access specific parts of the application.
- **Session Management**: When logged in, the user's name is displayed in the top right corner. Accessing registration or login pages while logged in requires clicking the "Logout" button.
- **Duplicate Email Prevention**: Integrated PHPMyAdmin and MySQL to prevent duplicate email entries during registration.
- **User-Centric Design**: The user interface is designed for a seamless experience during registration and login.
- **Continuous Improvement**: Open to feedback from users and contributors to enhance the project further.

## Installation

1. Clone the repository:

   ```bash
   https://github.com/PradyumnaMangave/LaravelSecureAuth.git
   ```

2. Install Composer dependencies:

   ```bash
   composer install
   ```

3. Create a `.env` file by copying `.env.example` and configuring your database settings:

   ```bash
   cp .env.example .env
   ```

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Run migrations:

   ```bash
   php artisan migrate
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

## Usage

- Register: Access the registration page, fill in your details, and click "Register."
- Login: Access the login page, enter your credentials, and click "Login."
- Logout: Click the "Logout" button to end your session.

## Feedback

Your feedback is valuable! If you encounter issues, have suggestions, or want to contribute, please open an issue or create a pull request.

## Author

- Pradyumna Mangave(https://github.com/PradyumnaMangave)

---
Main Page
![1](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/5cf9a672-3024-4325-9000-46772affd99e)
Login page
![Login page](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/2f8c8e0b-9c74-4884-be6d-a4e0f741f699)
Log In Details
![Log In Details](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/ccb66f2f-87df-4346-992d-3df7929adf69)
Logged in
![Logged in](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/dce9b8fc-eeaa-46f0-92c7-4246206454bf)
Registeration Page
![Registeration Page](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/af1eb5e6-bb90-46f5-ae19-3110356a4b45)
Registeration Details
![Registeration Details](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/ceb7ed51-5b60-4725-a5d0-a36832f24661)
Registeration Successful
![Registeration Successful](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/29a29e3d-41ea-4285-bdb1-85b12a11d943)
Duplicate entry
![Duplicate entry](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/ddcfa496-d4b0-4c8c-9bc4-2eaaf526be02)
Errors showing log in
![Errors showing log in ](https://github.com/PradyumnaMangave/LaravelSecureAuth/assets/102664040/ae5dd5f8-4fde-413a-974c-2254b9983864)

