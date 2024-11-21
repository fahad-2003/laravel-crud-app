# laravel-crud-app

# README for Car Management Application

## Introduction

This project uses the Laravel PHP framework to create a car management application. With the use of this application, users will be able to add, edit, view, and remove entries for automobiles from a list. The program incorporates features like form validation, pagination, and search to improve user experience and usability.

The project showcases important Laravel capabilities including validation, Blade templating, Eloquent ORM, and routing. By combining features like route resourcing, user input validation, search capability, and pagination with clean, well-structured code, it demonstrates a better knowledge of Laravel's capabilities.
## Features Implemented

### 1. **Car Management**
   - **Create Car**: By entering information like the car's name, colour, and manufacturer, users may add new vehicles. Before being submitted, the form is verified to make sure all necessary areas are filled out accurately.
   - **Update Car**:An existing car's details can be edited by users. Users can edit and save the form, which is already filled in with the vehicle's current information.
   - **Delete Car**: In order to avoid unintentional deletions, cars can be deleted from the system with a confirmation procedure.

### 2. **Search Functionality**
   - The automobile listing page now includes a search bar. Automobiles can be found by name or company. Using the `like` operator and Laravel's Eloquent ORM, the search queries are processed to produce adaptable and effective search results.

### 3. **Pagination**
   - When working with huge data sets, the application improves efficiency and user experience by limiting the number of automobiles displayed per page using Laravel's built-in pagination. The automobile listing page has built-in pagination, and users may utilise basic pagination controls to move between pages.

### 4. **Input Validation**
   - The form inputs on the automobile creation and update forms are validated using Laravel's robust validation tools to guarantee data integrity and avoid incorrect inputs. For instance, necessary data such as the car's name, colour, and company are verified to be strings with predetermined maximum lengths.
   - To make sure the application functions properly and without errors, validation messages are automatically shown to the user when the input does not match the criteria.

### 5. **Blade Templating**
   - The Blade templating engine in Laravel is heavily utilised in this project. For clarity and maintainability, views are organised and divided into modules. The automobile data and validation failures are dynamically shown using Blade syntax, which includes loops and conditional expressions.
   - Blade components, which encapsulate basic UI elements like buttons and form fields, might further improve the application's maintainability and reusability.

### 6. **Laravel Route Resourcing**
   - Route resourcing is implemented using `Route::resource()` to manage all car-related routes (such as creating, editing, viewing, and deleting cars). This reduces the amount of redundant route definitions and provides a more RESTful approach to routing.

### 7. **Styling with Custom CSS**
   - The forms, tables, and buttons now have better layouts and styles thanks to the use of custom CSS. In order to produce an aesthetically pleasing user interface, this comprises styles for buttons, table rows, and pagination controls.
   - Hover effects and responsive design components are also included in the CSS to guarantee that the application is easy to use and browse across a range of devices.

## Technical Details

### **Tech Stack**
   - **Laravel**: Laravel, a robust and adaptable framework for creating web applications, is the foundation around which the application is constructed.
   - **Eloquent ORM**: To communicate with the database and carry out CRUD tasks effectively, Eloquent is utilised.
   - **Blade Templating Engine**: Blade has strong templating capabilities including loops and conditionals and is used to create dynamic views.
   - **CSS**: The program is styled using custom CSS, which improves its visual appeal and guarantees that the user interface is responsive.


### **Routes**
   - Route resourcing is used for car-related actions, making the routes for creating, updating, and deleting cars more intuitive and RESTful..
   
  

