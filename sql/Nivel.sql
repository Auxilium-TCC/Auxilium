CREATE TABLE NIVEL(

	ID_NIVEL INT AUTO_INCREMENT PRIMARY KEY,
	ID_CURSO INT,
	TITULO_NIVEL VARCHAR(60) NOT NULL,
	
	CONSTRAINT FOREIGN KEY (ID_CURSO) REFERENCES CURSO(ID_CURSO)

);