### Instructions
For this task, you are given a `schema.sql` file that represents the database of a bookstore. Load this file into a MySQL database (or you can use a MySQL sandbox service like https://www.db-fiddle.com/) and write a MySQL query that will return the requested data.

Write your query in the `1_SQL/final_answer.sql` file.

### Task
The bookstore would like to retrieve the last 10 purchases made for statistical purposes. Write a SQL query that retrieves the last 10 purchases made from the store in chronological order (with the most recent purchase on top) showing the purchased book’s title, its author’s full name (name should be in one column), and date of purchase.

Sample Output:

```
+------------+--------+------------------+
| Book Title | Author | Date of Purchase |
+------------+--------+------------------+
|    ...     |  ...   |       ...        |
+------------+--------+------------------+
```