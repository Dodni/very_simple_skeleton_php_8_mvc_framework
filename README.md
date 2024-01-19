# Very simple skeleton php 8 mvc framewrok

# Install:
1. Clone or download the project.
2. Change the directory name to your project name in the .htaccess file and change the format from .htaccess.txt to .htaccess
3. Change the database and the BASE_URL in the config.php file.

# Directory structure:

Certainly! Here's the Markdown code for your README.md file:

markdown
Copy code
# Project Directory Structure

The directory structure of the `qr_kod_app` project is organized as follows:
```
qr_kod_app/ 
├── app/ 
│   └── controllers/ 
│       └── nev_controller.php
│   └── javascript/
│       └── nev.js 
│   └── models/ 
│       └── nev_model.php 
│   └── views/ 
│       └── nev_view.php 
├── public/ 
│   └── css/ 
│   └── img/ 
│   └── production_images/ 
├── system/ 
│   └── config.php 
│   └── database.php 
├── index.php 
├── init.php 
├── route.php 
└── .htaccess
```
## Description

- **app**: Contains the main application files.
  - **controllers**: Controllers for handling application logic.
  - **javascript**: JavaScript files.
  - **models**: Model classes for interacting with the database.
  - **views**: View templates.

- **public**: Publicly accessible files.
  - **css**: Cascading Style Sheets.
  - **img**: Image files.
  - **production_images**: Images used in production.

- **system**: System-level configuration files.
  - **config.php**: Configuration settings.
  - **database.php**: Database configuration.

- **index.php**: Main entry point for the application.
- **init.php**: Initialization script.
- **route.php**: Routing configuration.
- **.htaccess**: Apache server configuration.

Feel free to adjust the descriptions and details based on your project's specific structure and content.

