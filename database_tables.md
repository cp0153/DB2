CREATE TABLE `mysql`.`book` (
	`ISBN-13` INT(13) NOT NULL ,
	`title` VARCHAR(30) NOT NULL ,
	`year` INT(4) NOT NULL ,
	`category` VARCHAR(30) NOT NULL ,
	`pname` VARCHAR(30) NOT NULL ,
	`price` DECIMAL(10) NOT NULL ,
	FOREIGN KEY fk_book (pname)
	REFERENCES publisher (pname)
) ENGINE = InnoDB;
