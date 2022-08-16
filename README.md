# mvc
This is where you learn to structure an MVC of your own

## Original functionalities:
1. Fancy Error Display (display a 404, 403 or 500 message and a Request ID to submit to the Administrator)
2. Controller to View
3. View display
4. Controller to Model
5. Model interaction with the DB

## In Creation
1. Move ErrorHandler to Utility

## Pending checklist
1. Create a light/dark theme
2. Je, bado kuna some OG PHP errors occurring despite the logs ????????

## Installing the framework
1. Pull the repo from https://github.com/jeankyle/mvc.git
2. Open your project in an IDE of your choice
3. Run composer install in your IDE's terminal to create the vendor folder
4. Create a virtual host for the project in C:\xampp\apache\conf\extra\httpd-vhosts.conf:
      <VirtualHost *:80>
          DocumentRoot "C:/xampp/htdocs/sample"
          ServerName sample.mvc
      </VirtualHost>
5. Define your URL in C:\Windows\System32\drivers\etc\hosts:
       127.0.0.1       sample.mvc
6. Restart Apache and MySQL
7. Open your browser, and run http://sample.mvc
# mvc
