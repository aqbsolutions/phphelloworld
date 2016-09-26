Drop table if exists customers;
CREATE TABLE customers(
  id CHAR (32) NOT NULL,
  PRIMARY KEY(id),
  first_name VARCHAR(64),
  last_name VARCHAR(64),
  email VARCHAR(64)
);

INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( 'E0001', 'Debanjan', 'Sarkar', 'debanjan.s@gmail.com' );
INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( 'E0002', 'Biswajit', 'Ghosh', 'biswajit.g@gmail.com' );
INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( 'E0003', 'Partha', 'Chowdhury', 'partha.c@gmail.com' );
INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( 'E0004', 'Kallol', 'Banerjee', 'kallol.b@gmail.com' );
INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( 'E0005', 'Ritesh', 'Kumar Singh', 'ritesh.k@gmail.com' );
INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( 'E0006', 'Shamik', 'Ghosh', 'shamik.g@gmail.com' );
