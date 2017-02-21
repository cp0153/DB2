# This file will contain all the finished insert statements after they have been tested.

# First, insert all the People
# Insert statements for the People table
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Jeffrey Brown', 'Grand Rapids, Michigan', '6165555555', 'jeffrey_brown@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Paula Hawkins', 'London, UK', '0205555555', 'paula_hawkins@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Stephen King', 'Portland, Maine', '2075555555', 'steven_king@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Donna Tartt', 'Greenwood, Mississippi', '6625555555', 'donna_tartt@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Dan Brown', 'Exeter, New Hampshire', '6035555555', 'dan_brown@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('John Grisham', 'Jonesboro, Arkansas', '8705555555', 'John_Grisham@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Antoine de Saint-Exupery', 'Lyon, France', '1595555555', 'Antoine_Saint-Exupery@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('George Orwell', 'London, United Kingdom', '1115555555', 'George_Orwell@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Elena Ferrante', 'Naples, Italy', '1265555555', 'Elena_Ferrante@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('J.K. Rowling', 'London, UK', '9895555555', 'JK_Rowling@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Agatha Christie', 'Paris, France', '4855555555', 'Agatha_Christie@gmail.com')
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Muriel Barbery', 'Lowell, MA', '9785555555', 'Muriel_Barbery@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Jane Doe', 'Bolton, MA', '9785559999', 'Jane_Doe@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('John Doe', 'Andover, MA', '9785556666', 'John_Doe@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Daniel Fuentes', 'Cologne, MN', '5554669107', 'DanielJFuentes@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Ida J. Young', '4464 Irish Lane Madison, WI 53703', '6087282439', 'IdaJYoung@dayrep.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Ted S. Solt', '3218 Juniper Drive Mount Pleasant, MI 48858', '9898149209', 'TedSSolt@dayrep.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Ida B. Kohn', '2097 Old House Drive Worthington, OH 43085', '7408910156', 'IdaBKohn@teleworm.us');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Tiffanie H. Birdsall', '3891 Strother Street Birmingham, AL 35209', '2056922322', 'TiffanieHBirdsall@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Leonard B. Cornish', '1661 Sugarfoot Lane Kokomo, IN 46901', '7654579912', 'LeonardBCornish@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Cathy S. Castillo', '4 Crummit Lane Mahaska, NE 66955', '4022472428', 'CathySCastillo@teleworm.us');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Roger J. Weber', '3189 Lynn Street Cambridge, MA 02138', '6173093838', 'RogerJWeber@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Levi P. Olsen', '756 Hemlock Lane Edinburg, TX 78539', '9563862962', 'LeviPOlsen@dayrep.com');

# Then, insert all the Publishers
# Insert statements for the Publisher table
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Top Shelf Productions', 'Marietta', 'GA');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Riverhead Books', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Scribner', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Little, Brown and Company', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Doubleday', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Knopf', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Random House', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Pearson', 'Upper Saddle River', 'NJ');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('ThomsonReuters', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Scholastic', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Wiley', 'Hoboken', 'NJ');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Cengage Learning', 'Boston', 'MA');

# Now we can insert Authors
# Insert statements for Authors table
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000000', 'Jeffrey Brown', 'Grand Rapids, Michigan');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000001', 'Paula Hawkins', 'London, UK');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000002', 'Stephen King', 'Portland, Maine');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000003', 'Donna Tartt', 'Greenwood, Mississippi');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000004', 'Dan Brown', 'Exeter, New Hampshire');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000005', 'Agatha Christie', 'Paris, France');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000006', 'Muriel Barbery', 'Lowell, MA');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000007', 'J.K. Rowling', 'London, UK');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000008', 'Antoine de Saint-Exupery', 'Lyon, France');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000009', 'George Orwell', 'London, United Kingdom');
INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('1000000010', 'Elena Ferrante', 'Naples, Italy');

# Insert statements for Books table
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781603092661', 'A Matter of Life', '2013-07-02', 'Graphic Novels', 'Top Shelf Productions', '14.95');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781594633669', 'The Girl on the Train', '2015-01-13', 'Psychological Thriller', 'Riverhead Books', '11.04');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781476754451', 'Mr. Mercedes', '2014-06-03', 'Hardboiled', 'Scribner', '9.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781408704950', 'The Goldfinch', '2013-07-13', 'Graphic Novel', 'Little, Brown and Company', '8.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780385537858', 'Inferno', '2013-05-14', 'mystery thriller', 'Doubleday', '4.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781933372600', 'The Elegance of the Hedgehog', '2008-08-26', 'Fiction', 'Random House', '7.89');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780007527502', 'Murder on the Orient Express', '2013-12-09', 'Thriller', 'Wiley', '9.87');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780545010221', 'Harry Potter and the Deathly Hallows', '2007-07-21', 'Fantasy', 'Scholastic', '15.98');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780156012195', 'The Little Prince', '2000-05-15', 'Fiction', 'Random House', '12.76');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780452284234', '1984', '2003-06-05', 'Fiction', 'ThomsonReuters', '4.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781609450786', 'My Brilliant Friend', '2012-11-10', 'Fiction', 'Wiley', '7.99');

# Insert statements for the customer table
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('0000000001', 'Jane Doe', 'Bolton, MA');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('0000000002', 'John Doe', 'Andover, MA');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('0000000003', 'Daniel Fuentes', 'Cologne, MN');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('0000000004', 'Ida J. Young', '4464 Irish Lane Madison, WI 53703');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000001', 'Ida B. Kohn', '2097 Old House Drive Worthington, OH 43085');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000002', 'Ted S. Solt', '3218 Juniper Drive Mount Pleasant, MI 48858');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000003', 'Tiffanie H. Birdsall', '3891 Strother Street Birmingham, AL 35209');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000004', 'Cathy S. Castillo', '4 Crummit Lane Mahaska, NE 66955');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000005', 'Leonard B. Cornish', '1661 Sugarfoot Lane Kokomo, IN 46901');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000006', 'Roger J. Weber', '3189 Lynn Street Cambridge, MA 02138');
INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('1100000007', 'Levi P. Olsen', '756 Hemlock Lane Edinburg, TX 78539');

# Insert statements for the Purchase table
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537858', '2', '2017-02-06 00:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781603092661', '1100000004', '2017-01-04 00:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780007527502', '2', '2017-02-03 08:22:45');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780156012195', '1100000003', '2017-02-05 00:31:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537858', '1', '2017-02-07 07:32:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780452284234', '1100000006', '2017-02-06 18:24:39');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780545010221', '1100000004', '2017-02-04 12:19:29');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781408704950', '4', '2017-02-15 06:35:21');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781476754451', '1100000005', '2017-02-21 20:40:30');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781594633669', '1100000002', '2017-02-17 07:43:56');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781603092661', '1100000001', '2017-02-16 12:05:43');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781609450786', '1100000007', '2017-02-21 03:28:59');

# Insert statements for the Write table
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781603092661', '1000000000');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781594633669', '1000000001');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781476754451', '1000000002');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781408704950', '1000000003');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780385537858', '1000000004');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780007527502', '1000000005');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781933372600', '1000000006');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780545010221', '1000000007');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780156012195', '1000000008');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780452284234', '1000000009');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781609450786', '1000000010');
