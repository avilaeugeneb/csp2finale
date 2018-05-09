CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`userFirstName` varchar(255) NOT NULL,
	`userLastName` varchar(255) NOT NULL,
	`userUid` varchar(255) NOT NULL,
	`userEmail` varchar(255) NOT NULL,
	`userPassword` varchar(255) NOT NULL,
	`userCity` varchar(255) NOT NULL,
	`userRole` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `cartProducts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`cartID` INT(11) NOT NULL,
	`cartItem` INT(11) NOT NULL,
	`cartQty` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `carts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`cartUser` INT(11) NOT NULL,
	`cartRefNum` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`cName` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `products` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`pCategoryID` INT(11) NOT NULL,
	`pName` varchar(255) NOT NULL,
	`pDesc` varchar(255) NOT NULL,
	`pImage` varchar(255) NOT NULL,
	`pStocks` INT(11) NOT NULL,
	`pPrice` FLOAT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `roles` (
	`roleID` INT(11) NOT NULL AUTO_INCREMENT,
	`roleName` varchar(255) NOT NULL,
	PRIMARY KEY (`roleID`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`userRole`) REFERENCES `roles`(`roleID`);

ALTER TABLE `cartProducts` ADD CONSTRAINT `cartProducts_fk0` FOREIGN KEY (`cartID`) REFERENCES `carts`(`id`);

ALTER TABLE `cartProducts` ADD CONSTRAINT `cartProducts_fk1` FOREIGN KEY (`cartItem`) REFERENCES `products`(`id`);

ALTER TABLE `carts` ADD CONSTRAINT `carts_fk0` FOREIGN KEY (`cartUser`) REFERENCES `users`(`id`);

ALTER TABLE `products` ADD CONSTRAINT `products_fk0` FOREIGN KEY (`pCategoryID`) REFERENCES `categories`(`id`);

