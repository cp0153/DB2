CREATE TABLE book (
  ISBN13   INT          NOT NULL,
  title    VARCHAR(200) NOT NULL,
  year     DATE         NOT NULL,
  category VARCHAR(200) NOT NULL,
  pname    VARCHAR(200) NOT NULL,
  price    DECIMAL      NOT NULL,
  PRIMARY KEY pk_book (ISBN13),
  FOREIGN KEY fk_book (pname)
  REFERENCES publisher (pname)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);
