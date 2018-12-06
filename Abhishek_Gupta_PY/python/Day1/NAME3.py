#STORING NAME
name = raw_input("ENTER YOUR NAME>")
N = name.find(' ')
name1 = name[N:]
name2 = name[:N]            
print name1,name2
