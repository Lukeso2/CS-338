# CS-338
We load a sample dataset into MySQL from a csv file using the LOAD DATA statement. 
Loading a sample dataset, called sample.csv, that contains a first name in column 1 and a last name in column 2.

Create a table called "people":

	CREATE TABLE people (
    		id INT AUTO_INCREMENT PRIMARY KEY,
    		first_name VARCHAR,
    		last_name VARCHAR
	);


Next, load our data into the table

	LOAD DATA INFILE '/path/to/sample.csv'
	INTO TABLE people
	(first_name, last_name);
