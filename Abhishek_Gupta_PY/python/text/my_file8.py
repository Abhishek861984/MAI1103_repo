#total drank water by elephant

zoo_file = open("zoo.csv",'rt')

read_file = zoo_file.readlines()

water = 0

for i in read_file:
    split= i.split(',')
    if(split[0]=='elephant'):
        water = water + int(split[2])

print 'total drank water by elephant is =',water

zoo_file.close()

#total drank water by tiger

zoo_file = open("zoo.csv",'rt')

read_file = zoo_file.readlines()

water = 0

for i in read_file:
    split= i.split(',')
    if(split[0]=='tiger'):
        water = water + int(split[2])

print 'total drank water by tiger is =',water

zoo_file.close()

#total drank water by lion
zoo_file = open("zoo.csv",'rt')

read_file = zoo_file.readlines()

water = 0

for i in read_file:
    split= i.split(',')
    if(split[0]=='lion'):
        water = water + int(split[2])

print 'total drank water by lion is =',water

zoo_file.close()

#total drank water by kangaroo
zoo_file = open("zoo.csv",'rt')

read_file = zoo_file.readlines()

water = 0

for i in read_file:
    split= i.split(',')
    if(split[0]=='kangaroo'):
        water = water + int(split[2])

print 'total drank water by kangaroo is =',water

zoo_file.close()

#total drank water by zebra

zoo_file = open("zoo.csv",'rt')

read_file = zoo_file.readlines()

water = 0

for i in read_file:
    split= i.split(',')
    if(split[0]=='zebra'):
        water = water + int(split[2])

print 'total drank water by zebra is =',water

zoo_file.close()

#total drank water of all animals

zoo_file = open("zoo.csv",'rt')

read_file1 = zoo_file.readline()

read_file = zoo_file.readlines()

for i in read_file:

    split= i.split(',')
    water = water+int(split[2])

print 'Total drank water =',water

zoo_file.close()


