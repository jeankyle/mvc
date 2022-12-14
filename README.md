# mvc
This is where you learn to structure an MVC of your own

## Original functionalities:
1. Fancy Error Display (display a 404, 403 or 500 message and a Request ID to submit to the Administrator)
2. Controller to View
3. View display
4. Controller to Model
5. Model interaction with the DB
6. Simple pagination
7. Random generator for quick inserting of data without using forms

## In Creation
1. Router should take in controller, action and namespace to allow flexibility for namespaces

## Pending checklist
1. Create a light/dark theme
2. Je, bado kuna some OG PHP errors occurring despite the logs ????????

## Cloning the Repo
1. Open Terminal on Mac or CMD on Windows
2. Navigate to the htdocs folder
	Windows: C:\xampp\htdocs
    Mac: Applications\XAMPP\xampfiles\htdocs
3. Clone the repo
    git clone https://github.com/jeankyle/mvc.git

## Installing the framework
1. Pull the repo from https://github.com/jeankyle/mvc.git (see section on Cloning the Repo)
2. Open your project in an IDE of your choice
3. Run composer install in your IDE's terminal to create the vendor folder
4. Create a database using phpmyadmin and import the sample_db.sql file from the project's root folder
5. Create a virtual host for the project
    Windows: C:\xampp\apache\conf\extra\httpd-vhosts.conf

    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/sample"
        ServerName sample.mvc
    </VirtualHost>

     Mac: Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf

    <VirtualHost *:80>
        DocumentRoot "Applications/XAMPP/xamppfiles/htdocs/sample"
        ServerName sample.mvc
    </VirtualHost>

6. Define your URL:
    Windows: C:\Windows\System32\drivers\etc\hosts
    Mac: ~/etc/hosts

    127.0.0.1       sample.mvc
7. Restart Apache and MySQL
8. Open your browser, and run http://sample.mvc
# mvc
