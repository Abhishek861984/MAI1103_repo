zoo = open("C:/Users/BSDU/Desktop/ML & AI/database resources/zoo/zoo.csv",'rt')
read_file = zoo.readlines()
for i in read_file:
    y=i.split(',')
    if(y == 'elephant'):
        water = y[2]
        print(water)
   
zoo.close()
