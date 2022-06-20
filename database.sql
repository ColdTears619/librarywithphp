-- create database books;
-- create database library;

/*
create table library.book (
    id_t INT NOT NULL,
    name_b VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL
)
*/
/*
INSERT INTO library.book (id_t, name_b, category)
VALUES (1, 'A','A1'),
       (2, 'B','B1'),
       (3, 'C','C1')
*/

UPDATE library.book 
              SET category = 'A1'
              WHERE id_t = 1