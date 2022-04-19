# SIRIUS MESSENGER PRESENTATION SITE.

## Deployment
To deploy, first copy this repository, then step by step do the following:

1. Copy the contents of a file ".env.example" to a file ".env"
2. Install all dependencies using the command "composer install"
3. Run the docker using the command "sail up -d"
4. Run the command "sail artisan key:generate"
5. Run the command "sail artisan migrate"
6. Run the command "sail artisan storage:link"
7. Run the command "sail artisan make:admin" to create admin user
8. Run in a browser http://localhost
