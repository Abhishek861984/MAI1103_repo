animal_dictionary={}
import os
os.chdir('C:\\database_resources\\zoo')
import csv
with open('zoo.csv') as csv_file:
    csv_reader = csv.reader(csv_file,delimiter=',')
    next(csv_reader)
    for row in csv_reader:
        if row[0] not in animal_dictionary.keys():
            animal_dictionary[row[0]]=int(row[2])
        else:
            animal_dictionary[row[0]] = animal_dictionary[row[0]]+int(row[2])
for key,values in animal_dictionary.items():
    print (key,values)
        
       
