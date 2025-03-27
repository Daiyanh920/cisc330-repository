CREATE DATABASE `in_class_17`;


CREATE TABLE `users`
(
    `id`    int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    `email` varchar(80) NOT NULL,
    primary key (`id`)

);

CREATE TABLE `usercomments`
(
    `id`    int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int,
    `comment` TEXT,
    primary key (`id`) 

);

insert into users(name, email) value 
('Josh', 'Josh@example.com'),
('Hon', 'Hon@example.com'),
('Hamza', 'Hamza@example.com');

insert into usercomments(user_id, comment) value
(1,'Josh here'),
(1, 'Josh here again'),
(3, 'Hamza here'); 

SELECT 
    users.id,
    users.name,
    users.email,
    usercomments.comment

FROM
    users

LEFT JOIN
    usercomments on users.id = usercomments.user_id;


SELECT 
    users.id,
    users.name,
    users.email,
    usercomments.comment

FROM
    users

INNER JOIN
    usercomments on users.id = usercomments.user_id; 