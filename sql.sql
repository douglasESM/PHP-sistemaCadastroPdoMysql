MariaDB [(none)]> create database ultimatephp_cadastro;
Query OK, 1 row affected (0.00 sec)

MariaDB [(none)]> use ultimatephp_cadastro;
Database changed
MariaDB [ultimatephp_cadastro]> create table users(
    -> id int unsigned not null auto_increment,
    -> name varchar(60) not null,
    -> email varchar(80) not null,
    -> gender ENUM('m', 'f') not null,
    -> birthdate date not null,
    -> primary key(id)
    -> );
Query OK, 0 rows affected (0.20 sec)

MariaDB [ultimatephp_cadastro]> )