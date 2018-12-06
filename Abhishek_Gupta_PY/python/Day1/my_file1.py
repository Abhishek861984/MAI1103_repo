my_file = open("C:/Users/BSDU/Desktop/LAKSHYA  JAIN/day 1/a.txt",'rt')
my_file2 = open("C:/Users/BSDU/Desktop/LAKSHYA  JAIN/day 1/c.txt",'wt')
for i in my_file:
    my_file2.write(i)
    
    
    
my_file2.close()
my_file.close()
