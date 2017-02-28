// User input one author name, find all the books written by the author(s).

// This will get the author's aid. 'Dan Brown' is a placeholder.
SELECT author.aid
FROM author
WHERE author.name = 'Dan Brown'

// This would equal: 1000000004

// Now we can use this aid in a query on the writes table
SELECT ISBN13
FROM writes
WHERE writes.aid = '1000000004'

// Now we have all the ISBN's that author has written. Let's find all their
SELECT *
FROM book
WHERE `ISBN13` = 9780385537858

// Now we have all the info!
9780385537858
Inferno
2013-05-14
mystery thriller
Doubleday
4.99
