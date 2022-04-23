CREATE DATABASE TMS;
USE DATABASE TMS;

CREATE TABLE Student
(
StudentID int PRIMARY KEY,
Name varchar(100) NOT NULL,
Type varchar(100) NOT NULL,
DOB date NOT NULL,
Register_Date date NOT NULL,
Contact_Number int,
ClassID int FOREIGN KEY REFERENCES Class(ClassID), 
);

CREATE TABLE Class
(
ClassID int PRIMARY KEY,
Start_Date date NOT NULL,
End_Date date NOT NULL,
Fees money NOT NULL,
StudentID int FOREIGN KEY REFERENCES Student(StudentID),
TeacherID int FOREIGN KEY REFERENCES Teacher(TeacherID),
InstrumentID int FOREIGN KEY REFERENCES Student(InstrumentID)
);

CREATE TABLE Teacher
(
TeacherID int PRIMARY KEY,
Name varchar(100) NOT NULL,
Contact_Number int,
ClassID int FOREIGN KEY REFERENCES Class(ClassID)
);

CREATE TABLE Instrument
(
InstrumentID int PRIMARY KEY,
Name varchar (100) NOT NULL,
Quantity int NOT NULL,
Rental_Price money NOT NULL,
ClassID int FOREIGN KEY REFERENCES Class(ClassID),
SupplierID int FOREIGN KEY REFERENCES Supplier(SupplierID),
);

CREATE TABLE Supplier
(
SupplierID int PRIMARY KEY,
Name varchar (100) NOT NULL,
Address varchar(150) NOT NULL,
Contact_Number int,
Instrument int FOREIGN KEY 
REFERENCES Instrument(InstrumentID),
)