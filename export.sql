USE wordgen;

DROP TABLE IF EXISTS keywords;
DROP TABLE IF EXISTS categories;

CREATE TABLE categories (
	id INT NOT NULL,
	NAME VARCHAR(50) NOT NULL,
	PRIMARY KEY(id)
)ENGINE = INNODB;

CREATE TABLE keywords (
	word VARCHAR(50) NOT NULL,
	category_id INT NOT NULL,
	PRIMARY KEY(word)
)ENGINE = INNODB;

INSERT INTO keywords VALUES ('captain america',1);
INSERT INTO keywords VALUES ('iron man',1);
INSERT INTO keywords VALUES ('hulk',1);
INSERT INTO keywords VALUES ('thor',1);
INSERT INTO keywords VALUES ('black widow',1);
INSERT INTO keywords VALUES ('hawk eye',1);

INSERT INTO keywords VALUES ('running',2);
INSERT INTO keywords VALUES ('sitting',2);
INSERT INTO keywords VALUES ('jumping',2);
INSERT INTO keywords VALUES ('fighting',2);
INSERT INTO keywords VALUES ('reading',2);
INSERT INTO keywords VALUES ('working',2);

INSERT INTO categories VALUES (1,'character');
INSERT INTO categories VALUES (2,'action');