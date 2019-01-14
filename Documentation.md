# myBill

Main Application:

http://localhost:8001/

PhpMyAdmin:

http://localhost:8000/

database name : myDb

user name     : user

password      : test

Model
- database.php -> It contains all query (select, insert, update, delete) and connection to database.

View
- add.php -> The form that can be used by user to add their bill
- edit.php -> The form that can be used by user to edit and save their bill
- index.php -> The first page that user will see when they access the application. It contains table that shows user's bill with tax calculation
               and buttons to navigate to add and edit form.

Controller
- process.php -> This file manages all actions (add, edit, delete) and pass the data needed from View to Model.
