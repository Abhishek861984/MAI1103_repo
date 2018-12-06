#Sqllite version3
import sqlite3

#create databese
name =sqlite3.connect('zoo.db')
c=name.cursor()

#import to zoo_csv file
import csv

#cerating to zoo_csv 
with open('zoo.csv') as zoo_data:
    csv_reader = csv.reader(zoo_data,delimiter=',')
    next(csv_reader)
    for row in csv_reader:
        c.execute("""INSERT INTO zoo(animal,id,water_need)
                       VALUES('{}',{},{})""".format(row[0],row[1],row[2]))

                  
#open to table zoo_csv file
c.execute("""SELECT * FROM zoo""")
www = c.fetchall()
for i in www:
    print i[0],i[1],i[2]
                  
