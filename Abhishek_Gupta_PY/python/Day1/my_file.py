# FILE HANDELING
#my_file = open("C:/Users/BSDU/Desktop/LAKSHYA  JAIN/day 1/a.txt",'rt')

#USING 'READ'
#read_file = my_file.read()
#print(read_file)

#using "readline"
'''read_file = my_file.readline()
print(read_file)
read_file = my_file.readline()
print(read_file)
read_file = my_file.readline()
print(read_file)
read_file = my_file.readline()
print(read_file)
read_file = my_file.readline()
print(read_file)'''

#USING READLINES
'''read_file = my_file.read()
for i in read_file:
    print(i)'''

my_file = open("C:/Users/BSDU/Desktop/LAKSHYA  JAIN/day 1/b.txt",'wt')
write_file = my_file.write("ankit")
    
my_file.close()
