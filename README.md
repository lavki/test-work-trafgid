# Test Work trafgid

Create query to the DataBase using Ajax, jQuery and Bootstrap

## Short info about this example:

There are 3 tables: offers, operators, requests.
Output such query options:

1. `Select order number, name of the product, price, quantity and name of the operator for which the order is listed, WHERE the quantityof the goods > 2 AND the operator id of 10 OR 12;`
2. `Select name of the product, quantity and sum (price) for each commodity (grouped);`

## Structure of the folders

1. "index.php" file that containt all template (html code, javascript, css-link, and jquery-link)

2. "db" folder that containts:

- "testworktrafgid.sql" file - database dump file
- "db-connect.php" file - connect to the database
- "query.php" file - Ajax request processing
