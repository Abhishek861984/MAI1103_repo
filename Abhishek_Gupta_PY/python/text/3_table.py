import sqlite3

conn = sqlite3.connect('std2.db') #conn is the pointer of database you created

c = conn.cursor()

c.execute("""CREATE TABLE student_table99(StLastName TEXT ,
                                        StFirstName TEXT,
                                        Grade TEXT,
                                        Classroom INTEGER,
                                        Bus INTEGER)""")


c.execute("""CREATE TABLE student_table97(lastname TEXT,
                                            firstname TEXT,
                                            grade TEXT,
                                            classroom INTEGER)""")



# user choices

print ("press 2 for students database")
print ("press 3 for list database")



user_input= input("choose any of number to view that file data>>")
        


def std():
    with open("List.csv") as csv_file2:
        csv_reader2 = csv.reader(csv_file2,delimiter=',')
        next(csv_reader2)
        for row2 in csv_reader2:
            c.execute("""INSERT INTO student_table99 VALUES('{}','{}','{}',{},{})""".format(row2[0],row2[1],row2[2],row2[3],row2[4]))
    c.execute("SELECT * FROM student_table99")
    return (c.fetchall())


if user_input == 1:
    print zoo()
elif user_input == 2:
    print std()
elif user_input == 3:
    print air()
elif user_input == 4 :
    print car()
