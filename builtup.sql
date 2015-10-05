CREATE DATABASE campCreek;

CREATE TABLE data(data_id INT(4) NOT NULL 
PRIMARY KEY AUTO_INCREMENT, date VARCHAR(10) NOT NULL, 
latitude DOUBLE(13,10), longitude DOUBLE(13,10), stream_flow FLOAT(30), temp FLOAT(30), turbidity FLOAT(30), nitrogen FLOAT(30), phosphorus FLOAT(30), DO FLOAT(30), conductivity FLOAT(30), organisms VARCHAR(200), observations VARCHAR(500), observer VARCHAR(40));

CREATE TABLE users(userID CHAR(20) NOT NULL PRIMARY KEY, password VARCHAR(50) NOT NULL, admin CHAR(1) NOT NULL);



