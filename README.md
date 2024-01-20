# Very simple skeleton php 8 mvc framewrok

# Install:
1. Clone or download the project.
2. IMPORTANT! Change the directory name to your project name in the .htaccess file and change the format from .htaccess.txt to .htaccess (delete the ".txt")
3. IMPORTANT! Set up your database and change the BASE_URL to yours in the config.php file.

# Creating a New View: 
1. Create a new Controller first. You have to use the _controller.php tag always. It won't work without it. Example: test_controller.php
2. Copy the other controller code and change the class name to your new controller name
3. Create a new View on the same name as the Controller. Add some text into it like "Hello World"
4. Change the $viewPath in the Controller to your new view's path
5. Add a new route in the route.php. Example: '/mvc/test' => 'test_controller.php'
6. Done. Let's try it out!

# Directory structure:
```
mvc/ 
├── app/ 
│   └── controllers/ 
│       └── about_controller.php
│       └── contact_controller.php
│       └── home_controller.php
│   └── javascript/
│       └── test.js
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
│       └── style.css 
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
