my_file7 = open("student.txt",'at')

my_file7 = open("student.txt",'wt')

i=1

while i<=5:
    name = raw_input("Enter the name of student{}".format(i))

    my_file7.write(name+'\n')
    i=i+1

my_file7.close()

    
                   
    
    
    

