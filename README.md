# MVP Level B2C Web Portal

1. Please create basic HTML page of Login Screen and Make it dynamic.
   UID and Password based login

2. Dashboard : Dynamic Cards Creation showing how many customer and products are their in Database

3. User Management : Please create module of user management with fields Name, User ID and Password

4. Customer Module : Please create Index page showing customer data  having Fields > Customer Name, Customer Age, Customer Phone Number
Additional Module Feature would be - Add Customer, Edit & Update Customer, Delete Customer and Excel Download Option

5. Product Module :
Please create Index page showing product data  having Fields > Product Name, Customer Qty
Additional Module Feature would be - Add Product, Edit & Update Product, Delete Product and Excel Download Option

6. Logout : User would be able to logout by clicking on this button.

## Requirements

1. PHP 8.3
2. Node 16
3. MySQL 5.6

## Installation

1. Clone/Download the repo
2. Copy the `env.example` to `.env`
3. Create a new database schema and modify the database connection accordingly
4. Run `composer install`
5. Run `npm install`
6. Run `php artisan migrate`
7. Run `php artisan serve`
8. Run `npm run dev`

## Notes

1. User is of 2 types - admin and normal user
2. Admin will have the access to view all the users
3. Without authentication, anyone can see the dashboard analytic cards
4. Other modules, i.e. Products and Customers can be accessed only after login authentication.
