

#Receive List of Username and passwords if login
#Send new user details if register
#if login 

#Functions
def mainmenu():
    print("-----------Cloud Storage----------")
    print("1-Login\n2-Regster\n3-Exit")
    print("Enter Your Choice")
    choice=input()
    if(choice=="1"):
        loginmenu()
    elif(choice=="2"):
        print("--------Registration Menu-----------")
        regmenu()
    elif(choice=="3"):
        print("Thank You")
        exit(1)
    else:
        print("Invalid Input.Please Try Again")

def loginmenu():
    global uname
    print("Enter Username")
    uname=input()
    print("Enter Password")
    pswd=input()
    if(uname=='admin' and pswd=="1234"):#Hard coded
        global login
        login=1

def regmenu():
    print("Enter username")
    runame=input()
    if(runame=="admin"):
        print("Username already exists")
        regmenu()
    print("Enter password")
    rpswd=input()
    print("Re-Enter Password")
    reprpswd=input()
    if(rpswd!=reprpswd):
        print("Passwords do not match. Please Try Again")
        regmenu()
    #Send username and password to server
    
def usermenu():
    global login
    print("-------------USER Menu-----------")
    print("1-Upload a file\n2View your files\n3-Logout")
    choice=input()
    if(choice=="1"):
        print("Not yetekjff")
    elif(choice=="2"):
        print("Not ye")
    elif(choice=="3"):
        print("logout Successful")
        login=0

#MAIN 
login=0
uname=0
while(1):
    if(login==0):
        mainmenu()
    elif(login==1):
        usermenu()
