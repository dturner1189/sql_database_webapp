/* Insert some made up values to populate and test DB */
/* IDS 1xxx = 1 admin, 2xxx = student, 3xxx = grantor */

/* Master Administrator.. Me */
insert into UserLogin values(
  1000,
  'dpt16c',
  'admin'
);
insert into Admin values (
    1000
);


/* Makes a fake daddy-warbucks*/
insert into UserLogin values(
  2000,
  'MoneyBaggs',
  'grantor'
);
insert into Grantor values(
  2000,
  'Mr. Warbucks',
  10000,
  2,
  2
);
/* Make the first of two default scholarships */
insert into Scholarship values(
  2000,
  'Data Science award',
  5000,
  5000,
  1,
  1,
  0
);
/* Eligablility for the data science award */
insert into Eligability values(
  2000,
  'Data Science award',
  3.0,
  3.0,
  2,
  50000,
  10,
  TRUE,
  'CS',
  'NONE',
  FALSE,
  FALSE
);
/* Makes the second default award for math*/
insert into Scholarship values(
  2000,
  'Math award',
  5000,
  5000,
  1,
  1,
  0
);
/* Eligablility for the default math award */
insert into Eligability values(
  3000,
  'Math award',
  3.5,
  3.5,
  1,
  25000,
  0,
  TRUE,
  'Math',
  'NONE',
  FALSE,
  FALSE
);
/* END OF DEFAULT MAKE GRANTOR daddy warbucks */


/* Make some pretend students to interact with */
insert into UserLogin values(
  3000,
  'terryc',
  'student'
);
insert into Student values (
  3000,
  'Terry Crews',
  0,
  0,
  0
);
insert into StateRecord values(
  3000,
  'Terry Crews',
  3.01,
  3.01,
  'NONE',
  'Math'
);
insert into ProvidedRecord values(
  3000,
  'terrycrews@schfinder.com',
  1,
  10000,
  'AS',
  50,
  1,
  'Math',
  'Football',
  TRUE,
  TRUE
);




insert into UserLogin values(
  3001,
  'jeffgoldb',
  'student'
);
insert into Student values (
  3001,
  'Jeff Goldblum',
  0,
  0,
  0
);
insert into StateRecord values(
  3001,
  'Jeff Goldblum',
  3.5,
  3.5,
  'NONE',
  'Archeology'
);
insert into ProvidedRecord values(
  3001,
  'jeffgoldblum@jurrasic.com',
  1,
  20000,
  'BS',
  60,
  1,
  'Archeology',
  'Chess',
  TRUE,
  TRUE
);




insert into UserLogin values(
  3002,
  'alberteinstien',
  'student'
);
insert into Student values (
  3002,
  'Albert Einstien',
  0,
  0,
  0
);
insert into StateRecord values(
  3002,
  'Albert Einstien',
  3.9,
  3.9,
  'NONE',
  'Physics'
);
insert into ProvidedRecord values(
  2002,
  'alberteinstien@schfinder.com',
  1,
  60000,
  'PHD',
  100,
  1,
  'Space',
  'NONE',
  TRUE,
  TRUE
);



insert into UserLogin values(
  3003,
  'ledzep',
  'student'
);
insert into Student values (
  3003,
  'Jimmy Page',
  0,
  0,
  0
);
insert into StateRecord values(
  3003,
  'Jimmy Page',
  2.9,
  2.9,
  'NONE',
  'Music'
);
insert into ProvidedRecord values(
  2002,
  'ledzeppelin@netscape.com',
  1,
  60000,
  'NONE',
  100,
  1,
  'Music',
  'NONE',
  TRUE,
  TRUE
);


insert into UserLogin values(
  3006,
  'morryf',
  'student'
);
insert into Student values (
  3006,
  'Morry finkle',
  0,
  0,
  0
);
insert into StateRecord values(
  3006,
  'Morry finkle',
  3.99,
  3.99,
  'NONE',
  'CS'
);
insert into ProvidedRecord values(
  3006,
  'finklem@schfinder.com',
  1,
  0,
  'NONE',
  10,
  1,
  'CS',
  'Football',
  TRUE,
  TRUE
);

insert into UserLogin values(
  3008,
  'tswift',
  'student'
);
insert into Student values (
  3008,
  'Taylor Swift',
  0,
  0,
  0
);
insert into StateRecord values(
  3008,
  'Taylor Swift',
  3.99,
  3.99,
  'NONE',
  'CS'
);
insert into ProvidedRecord values(
  3008,
  'tswift@schfinder.com',
  2,
  0,
  'NONE',
  15,
  1,
  'CS',
  'Football',
  TRUE,
  TRUE
);


insert into Scholarship values(
  2001,
  'Bright Futures',
  1000000,
  1000000,
  100,
  100,
  0
);
/* Eligablility for the default math award */
insert into Eligability values(
  2001,
  'Bright Futures',
  2.0,
  2.0,
  1,
  0,
  0,
  TRUE,
  'NONE',
  'NONE',
  FALSE,
  FALSE
);

insert into Scholarship values(
  2002,
  'Bright Futures',
  1000000,
  1000000,
  100,
  100,
  0
);
/* Eligablility for the default math award */
insert into Eligability values(
  2002,
  'Bright Futures',
  2.0,
  2.0,
  2,
  0,
  0,
  TRUE,
  'NONE',
  'NONE',
  FALSE,
  FALSE
);


insert into Scholarship values(
  2003,
  'Super smart gal',
  4000000,
  4000000,
  20,
  20,
  0
);
/* Eligablility for the default math award */
insert into Eligability values(
  2003,
  'Super smart gal',
  2.0,
  2.0,
  2,
  0,
  0,
  TRUE,
  'NONE',
  'NONE',
  TRUE,
  FALSE
);


insert into Scholarship values(
  2003,
  'Super smart guy',
  4000000,
  4000000,
  20,
  20,
  0
);
/* Eligablility for the default math award */
insert into Eligability values(
  2003,
  'Super smart guy',
  2.0,
  2.0,
  1,
  0,
  0,
  TRUE,
  'NONE',
  'NONE',
  TRUE,
  FALSE
);


