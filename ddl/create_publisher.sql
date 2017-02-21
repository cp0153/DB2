# Publisher table - Should go second.
CREATE TABLE publisher (
  pname VARCHAR(200) NOT NULL,
  city  VARCHAR(200) NOT NULL,
  state VARCHAR(20)  NOT NULL,
  PRIMARY KEY pk_pub (pname)
);
