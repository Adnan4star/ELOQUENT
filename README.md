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
(relationship 1)
Students: name(string), email(string),
student_profiles: student_id(foreign key), country(string).

(relationship 2)
departments: name(string),
employees: depratment_id(string), name(string), phone(string).

(relationship 3)
authors: name(string),
books: title(string),
author_book (pivot): author_id(bigInteger), book_id(bigInteger).
