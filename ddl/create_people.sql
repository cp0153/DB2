CREATE TABLE people (
  name VARCHAR(200) NOT NULL,
  address VARCHAR(200) NOT NULL,
  telephone INT NOT NULL,
  email VARCHAR(200) NOT NULL,
  PRIMARY KEY pk_people(name, address)
);
