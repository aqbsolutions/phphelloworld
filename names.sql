Drop table if exists customers;
CREATE TABLE customers(
  id CHAR (32) NOT NULL,
  PRIMARY KEY(id),
  first_name VARCHAR(64),
  last_name VARCHAR(64),
  email VARCHAR(64)
);

INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( uuid(), 'Partha2 new', 'Chowdhury', 'jane.smith@example.com' );
INSERT INTO customers ( id, first_name, last_name, email ) VALUES ( uuid(), 'Shamik', 'Ghosh new wer', 'dave.richards@example.com' );
