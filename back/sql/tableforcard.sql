CREATE TABLE `forscandiweb`.`products_info` (
     `sku` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
     `name` VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
     `price` INT(20) NOT NULL ,
     `type` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
     `size` INT(20) NULL ,
     `weight` INT(20) NULL ,
     `height` INT(20) NULL ,
     `width` INT(20) NULL ,
     `length` INT(20) NULL ,
      UNIQUE `sku` (`sku`)
 )
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;