/* Create all tables for database */
CREATE TABLE UserLogin (
    ID INTEGER,
    Username VARCHAR(25),
    Password VARCHAR(16)
);

CREATE TABLE Admin (
    ID INTEGER
);

CREATE TABLE Grantor(
    ID INTEGER,
    Name VARCHAR(25),
    AmountSponsored INTEGER,
    NumberScholarshipsSponsored INTEGER,
    NumberScholarshipsRemaining INTEGER
);

CREATE TABLE Scholarship (
    ID INTEGER,
    Name VARCHAR(25),
    TotalValue INTEGER,
    ValueRemaining INTEGER,
    NumberAwards INTEGER,
    AwardsRemaining INTEGER,
    NumberStudentsEligable INTEGER
);

CREATE TABLE Eligability (
    ID INTEGER,
    Name VARCHAR(25),
    HSGPA DOUBLE,
    COLLGPA DOUBLE,
    Gender INTEGER,
    Income INTEGER,
    ServiceHours INTEGER,
    Citizanship BOOL NOT NULL DEFAULT '1',
    Major VARCHAR(15),
    Sports VARCHAR(10),
    HonorsProgram BOOL NOT NULL DEFAULT '0',
    StudyAbroad BOOL NOT NULL DEFAULT '0'
);

CREATE TABLE Student (
    ID INTEGER,
    Name VARCHAR(25),
    ScholarshipsWon INTEGER,
    NumberEligableFor INTEGER,
    AmountEligableFor INTEGER
);

CREATE TABLE StateRecord (
    ID INTEGER,
    Name VARCHAR(25),
    HsGPA DOUBLE,
    CollGPA DOUBLE,
    Sports VARCHAR(10),
    CoursesTaken VARCHAR(100)
);

CREATE TABLE ProvidedRecord (
    ID INTEGER,
    Email VARCHAR(50),
    Gender INTEGER,
    Income INTEGER,
    PreviousCollege VARCHAR(10), /* NONE, SOME, BS, BA, AA, AS, MS, PHD */
    ServiceHours INTEGER,
    Citizanship BOOL NOT NULL DEFAULT '1',
    Major VARCHAR(15),
    Sports VARCHAR(10), /* NONE, Football, etc, */
    HonorsProgram BOOL NOT NULL DEFAULT '0',
    StudyAbroad BOOL NOT NULL DEFAULT '0'
);


