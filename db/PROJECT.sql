CREATE TABLE user(
	USER_ID int(5) primary key auto_increment,
	UNAME char(20) not null,
	UPHONE int(10) not null,
	UEMAIL varchar(30) not null
);


CREATE TABLE device(
	D_ID int(5) primary key auto_increment,
	OS char(20) ,
	BROWSER_NAME char(10),
	BROWSER_VERSION int(5),
	IP_ADDRESS int(15) not null,
	USER_ID int(5) ,
	#foreign key(USER_ID) references user(USER_ID),
	S_ID int(5)
	#foreign key(S_ID) references site_account(S_ID)
);

CREATE TABLE site_account(
	S_ID int(5) primary key auto_increment,
	USERNAME char(20) not null,
	PASSWORD varchar(30) not null,
	WEBSITE_NAME char(40),
	WEBSITE_URL varchar(40) not null,
	USER_ID int(5) ,
	#foreign key(USER_ID) references user(USER_ID),
	M_ID int(5)
	#foreign key(M_ID) references master_account(M_ID)
);

CREATE TABLE master_account(
	M_ID int(5) primary key auto_increment,
	M_NAME char(20) not null,
	M_USERNAME char(20) not null,
	M_PASSWORD varchar(30) not null,
	C_ID int(5)
	#foreign key(C_ID) references company(C_ID)
);

CREATE TABLE company(
	C_ID int(5) primary key auto_increment,
	C_NAME char(20) not null,
	C_ADDRESS varchar(40) not null,
	C_CONTACT_NUMBER int(10) not null,
	C_EMAIL varchar(30) not null
);


# FOREIGN KEY SHOULD BE ADDED AFTER CREATING TABLE USING ALTER COMMAND
ALTER TABLE device ADD FOREIGN KEY (USER_ID) REFERENCES user(USER_ID);

ALTER TABLE device ADD FOREIGN KEY (S_ID) REFERENCES site_account(S_ID);

ALTER TABLE site_account ADD foreign key(USER_ID) references user(USER_ID);

ALTER TABLE site_account ADD foreign key(M_ID) references master_account(M_ID);

ALTER TABLE master_account ADD foreign key(C_ID) references company(C_ID);

#INSERT COMMAND
INSERT INTO user(UNAME,UPHONE,UEMAIL) VALUES('SOHAIL',9856115697,'SOHAIL456@GMAIL.COM');

INSERT INTO device(OS, BROWSER_NAME, BROWSER_VERSION ,IP_ADDRESS, USER_ID, S_ID) VALUES('linux','firefox',405,17242542,1,1);

INSERT INTO
site_account(USERNAME,PASSWORD,WEBSITE_NAME,WEBSITE_URL,USER_ID,M_ID)
VALUES('Arbazsk','arbaz12345','codeAcedemy','www.codeAcedemy.com',1,1);

INSERT INTO master_account(M_NAME,M_USERNAME,M_PASSWORD,C_ID)
VALUES('Arbaz','Arbaz Shaikh','Arbaz@12Shaikh',1);

INSERT INTO company(C_NAME,C_ADDRESS,C_CONTACT_NUMBER,C_EMAIL)
VALUES('google','1600 Amphitheatre Parkway,Mountain View, CA 94043,USA
','6514182651','google@gmail.org.com');

INSERT INTO company(C_NAME,C_ADDRESS,C_CONTACT_NUMBER,C_EMAIL) VALUES
('amazon','Amazon.com, Inc. 410 Terry Ave N Seattle, WA Internet & Catalog Shopping - MapQuest.',1830009009,'amazon@org.com');
