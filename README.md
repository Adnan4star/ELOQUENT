#### relationship 1
one-to-one,
one-to-one (Inverse)

#### relationship 2
one-to-many,
one-to-many (Inverse)

#### relationship 3
many-to-many (for all data),
many-to-many (for single data),
many-to-many(Inverse with all data),
many-to-many(Inverse with single data),

#### DATABASE TABLES DETAILS
(relationship 1) <br>
T1: Students: name(string), email(string) <br>
T2: student_profiles: student_id(foreign key), country(string) <br>

(relationship 2) <br>
T1: departments: name(string) <br>
T2: employees: depratment_id(string), name(string), phone(string) <br>

(relationship 3) <br>
T1: authors: name(string) <br>
T2: books: title(string) <br>
T3: author_book (pivot): author_id(bigInteger), book_id(bigInteger) <br>
