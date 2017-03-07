# Create bookstore DB
CREATE DATABASE bookdb;

# Use the bookstore DB for the rest of the inserts
USE bookdb;

# People table - Needs to go first.
CREATE TABLE people (
  name      VARCHAR(200) NOT NULL,
  address   VARCHAR(200) NOT NULL,
  telephone BIGINT       NOT NULL,
  email     VARCHAR(200) NOT NULL,
  PRIMARY KEY pk_people(name, address)
);

# Publisher table - Should go second.
CREATE TABLE publisher (
  pname VARCHAR(200) NOT NULL,
  city  VARCHAR(200) NOT NULL,
  state VARCHAR(20)  NOT NULL,
  PRIMARY KEY pk_pub (pname)
);

# Author table
CREATE TABLE author (
  aid     INT          NOT NULL,
  name    VARCHAR(200) NOT NULL,
  address VARCHAR(200) NOT NULL,
  PRIMARY KEY (aid),
  FOREIGN KEY fk_people(name, address)
  REFERENCES people (name, address)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

# Book table
CREATE TABLE book (
  ISBN13   BIGINT         NOT NULL,
  title    VARCHAR(200)   NOT NULL,
  year     DATE           NOT NULL,
  category VARCHAR(200)   NOT NULL,
  pname    VARCHAR(200)   NOT NULL,
  price    DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY pk_book (ISBN13),
  FOREIGN KEY fk_book (pname)
  REFERENCES publisher (pname)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

# Customer table
CREATE TABLE customer(
  cid int NOT NULL,
  name VARCHAR(200) NOT NULL,
  address VARCHAR(200) NOT NULL,
  PRIMARY KEY pk_cust (cid),
  FOREIGN KEY fk_cust (name, address)
  REFERENCES people (name, address)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

# Purchase table
CREATE TABLE purchase (
  ISBN13   BIGINT   NOT NULL,
  cid      INT      NOT NULL,
  datetime DATETIME NOT NULL,
  PRIMARY KEY pk_pur (ISBN13, cid, datetime),
  FOREIGN KEY fk_pur_bk (ISBN13)
  REFERENCES book (ISBN13)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
  FOREIGN KEY fk_pur_cust (cid)
  REFERENCES customer (cid)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

# Writes table
CREATE TABLE writes (
  ISBN13 BIGINT NOT NULL,
  aid    INT NOT NULL,
  PRIMARY KEY (ISBN13, aid),
  FOREIGN KEY fk_write_book (ISBN13)
  REFERENCES book (ISBN13)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
  FOREIGN KEY fk_write_author (aid)
  REFERENCES author (aid)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
