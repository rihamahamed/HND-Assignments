--Task1

SELECT * FROM Student
WHERE 
Register_Date >= '04/01/2021' 
and 
Register_Date <= '04/30/2021';

--Task2

SELECT SUM(Class.Fees) AS 
'APRIL 2021 TOTAL INCOME' 
FROM Student
INNER JOIN Class ON 
Student.ClassID = Class.ClassID
WHERE 
Register_Date >= '04/01/2021' 
and 
Register_Date <= '04/30/2021';

--Task3

SELECT Student.StudentID, Student.Name, 
Student.Type, Instrument.InstrumentID , 
Instrument.Name   FROM Student
INNER JOIN Class ON 
Student.ClassID = Class.ClassID
INNER JOIN Instrument ON 
Class.InstrumentID = Instrument.InstrumentID;


--Task4

SELECT * FROM Student 
ORDER BY Register_Date DESC;

--Task5

SELECT * FROM Student
WHERE Type = 'Part Time'


