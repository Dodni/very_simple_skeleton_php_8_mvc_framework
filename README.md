# Very simple skeleton php 8 mvc framewrok

# Install:
1. Clone or download the project.
2. IMPORTANT! Change the directory name to your project name in the .htaccess file and change the format from .htaccess.txt to .htaccess (delete the ".txt")
3. IMPORTANT! Set up your database and change the BASE_URL to yours in the config.php file.

# Directory structure:
```
very_simple_skeleton_php_8_mvc_framework/ 
├── app/ 
│   └── controllers/ 
│       └── about_controller.php
│       └── contact_controller.php
│       └── home_controller.php
│   └── javascript/
│       └── nev.js 
│   └── models/ 
│       └── test_model.php 
│   └── views/ 
│       └── about_view.php 
│       └── contact_view.php 
│       └── footer_view.php 
│       └── header_view.php 
│       └── home_view.php 
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

