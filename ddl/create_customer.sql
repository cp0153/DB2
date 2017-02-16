CREATE TABLE customer(
  cid int NOT NULL,
  name VARCHAR(200),
  address VARCHAR(200),
  PRIMARY KEY pk_cust (cid),
  FOREIGN KEY fk_cust (name, address)
  REFERENCES people (name, address)
  ON UPDATE CASCADE
  ON DELETE RESTRICT
);