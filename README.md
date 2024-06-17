MyCMS
MyCMS is a Content Management System built with PHP, HTML, MySQL, and CSS. It is designed to provide a simple and efficient way to create, manage, and publish digital content.

Table of Contents
Features
Requirements
Installation
Configuration
Usage
Directory Structure
Contributing
License
Troubleshooting
Contact
Features
User authentication and management
Content creation and editing
Media management
Customizable themes
Plugin architecture
SEO friendly URLs
Requirements
PHP 7.4 or higher
MySQL 5.7 or higher
Apache or Nginx web server
Composer (for dependency management)
A modern web browser
Installation
Step 1: Clone the Repository
sh
Copy code
git clone https://github.com/gyamficodes/php-cms-project.git
cd mycms
Step 2: Install Dependencies
Install PHP dependencies using Composer:



composer install
Step 3: Configure Environment
Copy the example environment file and update the necessary configuration settings:


cp .env.example .env
Update .env with your database credentials and other settings.

Step 4: Set Up the Database
Create a new MySQL database and import the initial schema:

sh
Copy code
mysql -u yourusername -p yourpassword yourdatabase < database/schema.sql
Step 5: Set Directory Permissions
Ensure the web server has write access to the uploads and cache directories:

sh
Copy code
chmod -R 775 uploads cache
chown -R www-data:www-data uploads cache
Step 6: Start the Server
If using a local development server, start it with:

sh
Copy code
php -S localhost:8000 -t public
Or configure your Apache/Nginx server to point to the public directory.

Configuration
Environment Variables
DB_HOST: Database host (e.g., localhost)
DB_NAME: Database name
DB_USER: Database user
DB_PASS: Database password
APP_ENV: Application environment (e.g., local, production)
APP_DEBUG: Enable/disable debug mode (true/false)
Usage
Admin Panel
Access the admin panel to manage content:

bash
Copy code
http://localhost:8000/admin
Use your admin credentials to log in and start creating content, managing users, and configuring settings.

Creating Content
Navigate to the "Content" section in the admin panel.
Click "Add New" to create a new page or post.
Fill in the required fields and save.
Customizing Themes
Themes are located in the themes directory.
To create a new theme, copy an existing one and modify the HTML/CSS files.
Activate your theme in the admin panel under "Settings" > "Themes".
Directory Structure
graphql
Copy code
mycms/
├── app/                # Core application files
├── public/             # Publicly accessible files (index.php, assets)
├── resources/          # Views and templates
├── storage/            # Logs and cache
├── uploads/            # User-uploaded files
├── .env.example        # Example environment configuration
├── composer.json       # Composer dependencies
├── database/
│   └── schema.sql      # Database schema
└── README.md           # This file
Contributing
We welcome contributions from the community! To contribute:

Fork the repository.
Create a new branch for your feature or bugfix.
Write tests for your changes.
Ensure all tests pass.
Submit a pull request with a clear description of your changes.
License
This project is licensed under the MIT License. See the LICENSE file for details.

Troubleshooting
Common Issues
404 Not Found
Ensure the web server is configured to rewrite URLs to public/index.php.
Check that your .htaccess (for Apache) or configuration file (for Nginx) is set up correctly.
Database Connection Errors
Verify your database credentials in the .env file.
Ensure the MySQL server is running and accessible.
File Permission Errors
Check that the uploads and cache directories are writable by the web server.
Contact
For any questions or support, please contact us at support@mycms.com or create an issue on GitHub.
