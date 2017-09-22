CREATE DATABASE IF NOT EXISTS sqli;
USE sqli;
CREATE TABLE IF NOT EXISTS users (
    user_id SMALLINT NOT NULL,
    username VARCHAR(20),
    password VARCHAR(20),
    PRIMARY KEY (user_id)
)
ENGINE=INNODB;

INSERT INTO sqli.users (user_id, username, password) VALUES ('0','Solene', 'solene123');
INSERT INTO sqli.users (user_id, username, password) VALUES ('1','Hugo', 'hugo123');
INSERT INTO sqli.users (user_id, username, password) VALUES ('2','Colin', 'colin123');
