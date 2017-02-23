# DB2
DB2 project

Created by Jason Downing and Chris Pearce

# How to run
The ddl folder contains all the CREATE TABLE statements. There are separate files
for each CREATE TABLE statement, and a "create.sql" file which contains all of
the CREATE TABLE statements in one file, and in the correct order to run them.
Using phpMyAdmin from the XAMPP program, you can copy / paste this file to create
the tables for the database that we dumped in the "bookdb_dump.sql" file.

The dml folder contains all the INSERT INTO statements. Similar to ddl folder,
we have separate files for each INSERT INTO statement, and a "insert.sql" file
which contains all of the INSERT INTO statements, and in the correct order to
run them. You can also use phpMyAdmin to run all of these INSERT INTO statements,
and populate the bookdb database with data.

The sql folder contains our database, which we have dumped from phpMyAdmin into
a file called "bookdb_dump.sql".

We also have php code in the php folder, and an index.html file in the main
directory which contains our user interface.
