
To run migrations please use the command: php artisan migrate

To run the seeders use the following commands in the given order:
1. php artisan db:seed --class VenueSeeder
2. php artisan db:seed --class DishSeeder
3. php artisan db:seed --class PackageSeeder
4. php artisan db:seed --class SubPackageSeeder
5. php artisan db:seed --class PackageDishSeeder
6. php artisan db:seed --class MusicSeeder

To run the website, enter the url 'http://127.0.0.1:8000' in the browser.

The signup page creates an account for customer by default.To create an account for admin, 
the signup page is the same but the user has to change the 'usertype' in the users table
 from 'customer' to 'admin'.
