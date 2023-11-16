from socket import *
import os
serverPort = 12000
serverSocket = socket(AF_INET,SOCK_STREAM)
serverSocket.bind(('127.0.0.1',serverPort))
serverSocket.listen(1)
print("The server is ready to receive")
while 1:
	connectionSocket, addr = serverSocket.accept()
	sentence = connectionSocket.recv(1024).decode()
	if(sentence=="list"):
		os.system("ls")
	else:
		# print(sentence)
		x="/home/dgdheeraj/Desktop/"
		sentence=x+sentence
		fi=open(sentence,"w+")
		print(sentence)
		while(1):
			sen=connectionSocket.recv(2).decode()
			if not sen:
				break
			fi.write(sen)
			print(sen)
		fi.close()
		# capitalizedSentence = sentence.upper()
		# connectionSocket.send(capitalizedSentence.encode())
	connectionSocket.close()
