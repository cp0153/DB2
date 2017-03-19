Database II Project Instructions
Created by Jason Downing and Chris Pearce

To run our project, complete the following steps:
1. Create the database in phpMyAdmin by copying the create.sql instructions into the "SQL" tab
2. Open the "bookdb" database by clicking on the "Databases" tab
3. Populate the "bookdb" tables by copying the insert.sql instructions into the "SQL" tab
4. You can now run the index.php file, as long as all the PHP code found in /php/ is located in the same directory
as the index.php file. This file contains a UI to all 10 of queries, and links to the different php files that run
the selected query. NOTE: the index.php file is our "HTML" file, we just made it a PHP file so we could embed PHP
scripts easily.

Notes:
- The majority of our queries use drop down menus when possible. The code for the drop down menus can be found in the
/php/ folder, with names like "dropdown_menu_authors", "dropdown_menu_customers", etc.
- Queries that do not have a drop down menu have examples of what kind of input the query expects.
- We also added error checking for every query. In the event a query fails, there will be an error that warns you what
happened and why. Usually this happens after testing the delete book query since that query will delete authors as well.

Extras:
- Any extra queries we add will be listed here, with descriptions on what we did.
