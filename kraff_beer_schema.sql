CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_status` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`reference_number` varchar(255) NOT NULL UNIQUE,
	`status_id` INT(11) NOT NULL,
	`user_id` INT(11) NOT NULL,
	`total` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`price` INT(11) NOT NULL,
	`category_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders_items` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`item_id` INT(11) NOT NULL,
	`order_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	`subtotal` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`status_id`) REFERENCES `order_status`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

ALTER TABLE `orders_items` ADD CONSTRAINT `orders_items_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

