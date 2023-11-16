from socket import *

serverName = ""
serverPort = ""

clientSocket = socket(AF_INET, SOCK_STREAM)
clientSocket.connect((serverName, serverPort))

sentence = input("Input lowercase sentence:")
clientSocket.send(sentence.encode())

modifiedSentence = clientSocket.recv(1024)
print("From server:",modifiedSentence.decode())

clientSocket.close()
