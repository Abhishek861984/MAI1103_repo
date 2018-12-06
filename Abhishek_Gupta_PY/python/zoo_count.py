import os
os.chdir('C:\\database_resources\\zoo')
number1=0
number2=0
number3=0
number4=0
number5=0
import csv
with open('zoo.csv') as csv_file:
    csv_reader = csv.reader(csv_file,delimiter=',')
    next(csv_reader)

    for row in csv_reader:
      if row[0]=='elephant':
          number1+=int(row[2])
      if row[0]=='tiger':
          number2+=int(row[2])
      if row[0]=='zebra':
          number3+=int(row[2])
      if row[0]=='lion':
          number4+=int(row[2])
      if row[0]=='kangaroo':
          number5+=int(row[2])
       
      
print ("Total drank water by Elephant :{}".format(number1))
print ("Total drank water by Tiger    :{}".format(number2))
print ("Total drank water by Zebra    :{}".format(number3))
print ("Total drank water by Lion     :{}".format(number4))
print ("Total drank water by Kangaroo :{}".format(number5))

