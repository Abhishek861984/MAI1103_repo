
student = open("C:/Users/BSDU/Desktop/LAKSHYA  JAIN/day 1/student.txt",'wt')
i=1
while(i<=2):
    student_name = raw_input("enter the name {}".format(i)) 
    student.write(student_name + '\n')
    i =i+1   
student.close()
