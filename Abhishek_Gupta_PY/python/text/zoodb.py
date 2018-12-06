#table name
import sqlite3
conn =sqlite3.connet('zoo.db')
c=conn.cursor()
c.execute(""" CREATE TABLE zoo.(
        id INTEGER
        ainmal TEXT
        uniq_id TEXT
        water_need TEXT)""")

#create table a zoo file
c.execute("INSERT INTO zoo VALUES (0),' zebra','1011','240'""")

#insert to table
c.execute("SELECT* FROM zoo WHERE uniq_id='1011'")
print(c.fetchone())


import sqlite3
conn=sqlite3.connect('employee.db')

#create cursor
c=conn.cursor()

#create to table
id = 01
first ="'BSDU'"
last = "'University'"
pay=5000
c.execute("INSERT INTO employees VALUES {},{},{},)""".format(id,first,last,pay))
#INSERT to zoo file
c.execute("SELECT* FROM employees WHERE last ='University'")
print(c.fetchone())
