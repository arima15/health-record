# health-record
Our group 5 project for our 3rd year 1st semester in Benedicto College. A full stack project for the preparation of our capstone project

# Health Record System

## Overview
The Health Record System is a web application designed to manage and maintain health records efficiently. This system provides a secure login mechanism, user management, and various settings to customize the user experience.

## Table of Contents
1. [Login Page](#login-page)
2. [Dashboard](#dashboard)
3. [User Management](#user-management)
4. [Health Records](#health-records)
5. [Settings](#settings)

## Login Page
The login page (`resources/views/auth/login.blade.php`) is the entry point for users to access the Health Record System. It features:

- **User Authentication**: Users can log in using their username and password.
- **Error Handling**: Displays error messages for invalid login attempts.
- **Remember Me**: Option to remember the user's login session.
- **Forgot Password**: A modal to reset the password by sending a reset link to the user's email.

### Key Features
- **Responsive Design**: The login page is designed to be responsive and user-friendly.
- **Security**: Utilizes CSRF protection for form submissions.

## Dashboard
The dashboard provides an overview of the user's health records and recent activities. It is the main interface where users can navigate to different sections of the system.

### Key Features
- **User-Friendly Interface**: Displays key information at a glance.
- **Navigation**: Easy access to different modules like user management and health records.

## User Management
This module allows administrators to manage user accounts, including creating, updating, and deleting users.

### Key Features
- **Role-Based Access Control**: Different access levels for administrators and regular users.
- **User Profiles**: Manage user information and settings.

## Health Records
The core functionality of the system, where users can view and manage health records.

### Key Features
- **Record Management**: Add, edit, and delete health records.
- **Search and Filter**: Easily find records using search and filter options.

## Settings
The settings module (`resources/views/settings/index.blade.php`) allows users to customize their experience and configure system preferences.

### Key Features
- **Profile Settings**: Update personal information and change passwords.
- **System Preferences**: Configure application settings to suit user needs.

## Installation
To set up the Health Record System, follow these steps:

1. **Clone the Repository**: 
   ```bash
   git clone https://github.com/yourusername/health-record-system.git
   ```

2. **Install Dependencies**:
   ```bash
   cd health-record-system
   composer install
   npm install
   ```

3. **Environment Configuration**:
   - Copy `.env.example` to `.env` and configure your database and mail settings.

4. **Database Migration**:
   ```bash
   php artisan migrate
   ```

5. **Run the Application**:
   ```bash
   php artisan serve
   ```

## Contributing
Contributions are welcome! Please read the [contributing guidelines](CONTRIBUTING.md) for more details.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
For any inquiries, please contact [your-email@example.com](mailto:your-email@example.com).



