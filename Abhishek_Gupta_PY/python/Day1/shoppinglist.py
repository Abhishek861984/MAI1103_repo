# CREATE THE LIST
shopping_list = []

def welcome():
    print("WELCOME TO UR SHOPPING LIST APP")
    print("type DONE when u want to quit")

def show_help():    
     print("type DONE when u want to quit the edditing in ur list") 
     print("type SHOW when u want to see the list")   

def  show_list():
     #new_item = my_item.split(',') 
     for i in shopping_list:
        print(i)
def add_to_list():
    shopping_list.append(my_item)


#INSTRUCTIONS FOR THE USER
welcome()


#TAKING THE VARIABLE
while(True):
    my_item = raw_input(">")

#KEYWORDS FOR THE APP
    
    # USING DONE
    if ( my_item.upper() == "DONE"):
        break

    # USING SHOW
    elif( my_item.upper() == "SHOW"):
        show_list()

    # USING HELP   
    elif( my_item.upper() == "HELP"):
       show_help

   # ADDING IN THE LIST   
    else:
         add_to_list()
