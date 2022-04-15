import serial
import os

import time
import mysql.connector

mydb = mysql.connector.connect(
    host = "localhost",
    user="laravel_user",
    passwd="",
    database="communication"
)

# if __name__ == '__main__':
port = serial.Serial("/dev/ttyUSB0", baudrate="9600", timeout=3.0)

mycursor = mydb.cursor()

while True:
        mycursor.execute("SELECT * FROM led;")

        for x in mycursor:
            print(x[1])

        if x[1] == 'aan':
                print(x[1])
                port.write("l1".encode())
        else:
                port.write("l0".encode())

        rcv = port.readline().decode('utf-8').rstrip()
        if(rcv == "b"):
            print("yes")
            os.system("python update.py")

        time.sleep(1)
        mydb.commit()

mydb.close()