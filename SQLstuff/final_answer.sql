USE bookstore_development;
/* Write your query below: */

SELECT books.title AS "Book Title", 
CONCAT(authors.first_name, ' ', authors.last_name) AS Author,
purchase_date AS "Date Of Purchase"
FROM purchases 
RIGHT JOIN books
ON purchases.book_id = books.id

RIGHT JOIN authors ON books.author_id = authors.id
ORDER BY purchases.purchase_date DESC LIMIT 10;
