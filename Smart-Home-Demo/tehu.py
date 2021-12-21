import mysql.connector
import random
import time 


while (True): 
    mydb = mysql.connector.connect(
    host="localhost",
    user="kyle",
    password="123456",
    database="smart_home"
    )
    mycursor = mydb.cursor()
    time.sleep(1)
    sql = "INSERT INTO temp_humid (Log,TEMP, HUMID) VALUES (CURRENT_TIME(),%s, %s)"
    temp = str(random.randint(17,38))
    humid= str(random.randint(30,60))
    val = (temp, humid)
    mycursor.execute(sql, val)
    mydb.commit()


        




