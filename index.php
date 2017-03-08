<!--
    HTML File for the Database II Project
    Created by Jason Downing and Chris Pearce
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DB2 Project</title>
</head>
<body>
<h1>Database II Project</h1>

<p>We need to implement the following queries in PHP:</p>
<ol>

    <br><br />
    <!-- Query 1 -->
    <li>Find the names of authors who have purchased a book written by themselves. (aid and cid will not be the same).
    </li>
    <ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
    </ul>
    <form action="php/1_author_purch.php" method="post">
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 2 -->
    <li>User input one author name, find all the books written by the author(s).</li><ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
        <li>Take user input, e.g. 'Dan Brown'.</li>
        <li>Find all books written by 'Dan Brown'.</li>
    </ul>

    <form action="php/2_input_authors.php" method="post">
        Enter an author's name: <input type="text" name="name"><br>
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 3 -->
    <li>User input one customer name, find purchase history of the customer(s).</li>
    <ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
        <li>Take user input, e.g. 'Stephen King'.</li>
        <li>Find all purchases by 'Stephen King'.</li>
    </ul>
    <form action="php/3_input_cust_name.php" method="post">
        Enter a customer's name: <input type="text" name="name"><br>
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 4 -->
    <li>User input one or more words of a book title, find all information of the books whose titles contain those
        words.
    </li>
    <ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
        <li>Take user input, e.g. 'Inferno'</li>
        <li>Print book info (title, year, category, publisher, and price)</li>
    </ul>

    <form action="php/4_input_title.php" method="post">
        Words of a book title: <input type="text" name="title"><br>
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 5 -->
    <li>Design a drop down menu so user can use it to select a year and find the title of the best selling book of that
        year.
        <ul>
            <li><b>THIS QUERY IS WORKING.</b></li>
            <li>Take user input, of dynamically populated dropdown menu</li>
            <li>prints the name of the best selling book in that year</li>
        </ul>
    </li>


    <form action="php/5_dropdown.php" method="post">
            <select name="years">
                <?php include ('php/dropdown_menu.php'); ?>
                </select>

        <input type="submit">
    </form>

    <br><br />
    <!-- Query 6 -->
    <li>Record the information that a CUSTOMER has purchased a book.</li>
    <ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
        <li>Create some way for customer's to buy books.</li>
        <li>Record this info in the purchases table.</li>
        <li>Could create a page that lists all the books, their prices, and allows customers to select books to buy.
            After the customer hits the "buy" button just record their CID, datetime, and the book's ISBN13 number.</li>
        <li>Placeholder HTML asks for title of Book (e.g. "The Little Prince"), and cid (e.g. "1100000001")</li>
    </ul>
    <form action="php/6_record_purchase.php" method="post">
        Enter the book you are purchasing: <input type="text" name="title"><br>
        Enter your cid: <input type="text" name="cid"><br>
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 7 -->
    <li>Add a new customer to the database.</li>
    <form action="php/7_new_customer.php" method="post">
        Enter new customer name: <input type="text" name="name"><br>
        Enter new customer address: <input type="text" name="address"><br>
        Enter new customer telephone: <input type="text" name="telephone"><br>
        Enter new customer email: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 8 -->
    <li>User input one name and address, update the address in people, and author or customer table if applicable.</li>
    <ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
        <li>Take user input, e.g. "Dan Brown", "1 Uni Ave, Lowell, MA, USA"</li>
        <li>or "Daniel Fuentes", "Lowell, MA""</li>
        <li>Update the address in the People table, as well as the author or customer table.</li>
    </ul>

    <form action="php/8_input_name.php" method="post">
        Enter a name: <input type="text" name="name"><br>
        Enter an address: <input type="text" name="address"><br>
        <input type="submit">
    </form>

    <br><br />
    <!-- Query 9 -->
    <li>Add a new book to the database. If the author and/or the publisher of the new book is not in the database,
        insert all information about the author and/or publisher as well.
    </li>

    <br><br />
    <!-- Query 10 -->
    <li>Delete a book. If the author of the book has not written other books, delete the author as well.</li>
    <ul>
        <li><b>THIS QUERY IS WORKING.</b></li>
        <li>Enter the title of a book, e.g. "The Little Prince"</li>
        <li>Find the book's author, count how many books he has. If == 1, then delete the author too.</li>
        <li>Delete the book now that we've searched the for the author.</li>
    </ul>

    <form action="php/10_delete_book.php" method="post">
        Enter the title of the book you would like to delete: <input type="text" name="title"><br>
        <input type="submit">
    </form>
</ol>
</body>
</html>
