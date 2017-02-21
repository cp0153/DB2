# People table
CREATE TABLE people (
  name      VARCHAR(200) NOT NULL,
  address   VARCHAR(200) NOT NULL,
  telephone BIGINT       NOT NULL,
  email     VARCHAR(200) NOT NULL,
  PRIMARY KEY pk_people(name, address)
);
