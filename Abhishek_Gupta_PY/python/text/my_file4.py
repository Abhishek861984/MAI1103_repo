#read_file to loop

my_file4 = open("a.txt","rt")

read_file = my_file4.readlines()

for i in read_file:
    print i

my_file4.close()


