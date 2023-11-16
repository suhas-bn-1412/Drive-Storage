import sys
from socket import *
serverName = '127.0.0.1'
serverPort = 12000
clientSocket = socket(AF_INET, SOCK_STREAM)
clientSocket.connect((serverName,serverPort))
sentence = sys.argv[1]

clientSocket.send(sentence.encode())
if(sentence=="list"):
	pass
else:
	fi=open("abc.txt","r")
	s=fi.read()
	print(s)
	clientSocket.send(s.encode())
	fi.close()
# clientSocket.send("break".encode())
# modifiedSentence = clientSocket.recv(1024).decode()
# print ("From Server:", modifiedSentence)
clientSocket.close()
