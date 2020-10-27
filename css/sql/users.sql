/*
  Name:         Scott Alton
  File:         users.sql
  Description:  Creates the users table for login authentication
  Date:         October 22, 2020
  Course:       WEBD3201 - Web Development - Intermediate
*/

DROP SEQUENCE IF EXISTS user_id_seq
CASCADE;
CREATE SEQUENCE user_id_seq
START 1;

DROP TABLE IF EXISTS users;

/* Users table - stores user account registration registration with Id as the primary key (auto-generated from users_id_sequence if no key is provided)*/
CREATE TABLE users
(
  Id INT PRIMARY KEY DEFAULT nextval('user_id_seq'),
  EmailAddress VARCHAR(255) UNIQUE,
  Password VARCHAR(255) NOT NULL,
  FirstName VARCHAR(255),
  LastName VARCHAR(255),
  LastAccess TIMESTAMP,
  EnrolDate TIMESTAMP,
  Enabled BOOLEAN,
  Phone VARCHAR(14),
  Type VARCHAR(2)
);

/* Sample of admin user creation that will use sequence for unique ID */
INSERT INTO Users
  (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enabled, Phone, Type)
VALUES
  (
    'scottaltonmusic@gmail.com', 'password', 'Scott', 'Alton', '2020-10-27 11:00:00', '2020-10-27 11:00:00', true, '(905)-242-5045',
    'a' 
  );

INSERT INTO Users
  (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enabled, Phone, Type)
VALUES
  (
    'shannondoyle@gmail.com', 'password', 'Shannon', 'Doyle', '2020-10-27 11:00:00', '2020-10-27 11:00:00', true, '(905)-242-5000',
    'a' 
  );

/* Sample of teacher user creation*/
INSERT INTO Users
  (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enabled, Phone, Type)
VALUES
  (
    'dylanbortacello@gmail.com', 'password', 'Dylan', 'Borticello', '2020-10-27 11:00:00', '2020-10-27 11:00:00', true, '(905)-242-5055',
    't' 
  );

INSERT INTO Users
  (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enabled, Phone, Type)
VALUES
  (
    'jessica.alcock@gmail.com', 'password', 'Jessica', 'Alcock', '2020-10-27 11:00:00', '2020-10-27 11:00:00', true, '(905)-262-1265',
    't' 
  );

/* Sample of student user creation*/
INSERT INTO Users
  (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enabled, Phone, Type)
VALUES
  (
    'lancealton@gmail.com', 'password', 'Lance', 'Alton', '2020-10-27 11:00:00', '2020-10-27 11:00:00', true, '(905)-242-5055',
    's' 
  );

INSERT INTO Users
  (EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enabled, Phone, Type)
VALUES
  (
    'dawn.goodman@gmail.com', 'password', 'Dawn', 'Goodman', '2020-10-27 11:00:00', '2020-10-27 11:00:00', true, '(905)-262-1265',
    's' 
  );

SELECT *
FROM users;




