CREATE DATABASE `notes_DB`;

CREATE TABLE `notes`
(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(80) NOT NULL,
    `description` TEXT NOT NULL,
    primary key (`id`)

);

insert into notes(title, description) value 
('Rice','Get 5kg'),
('Chicken', 'Get 5 lb'),
('Bean Sprouts','1 bag'),
('Soy Sauce','Small bottle');


Update notes
set title = 'White Rice'
Where title = 'Rice';