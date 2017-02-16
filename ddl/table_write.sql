CREATE TABLE `mysql`.`write` (
    `ISBN-13` INT(13) NOT NULL ,
    'aid' INT(10) NOT NULL,
     FOREIGN KEY fk_write_book ('ISBN-13')
     REFERENCES book ('ISBN-13'),
     FOREIGN KEY fk_write_author (aid)
     REFERENCES author (aid)
) ENGINE = InnoDB;
