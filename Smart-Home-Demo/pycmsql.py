import mysql.connector
import time 

# mydb = mysql.connector.connect(
#   host="localhost",
#   user="kyle",
#   password="123456",
#   database="smart_home"
# )

#Print Status
while(True):
 mydb = mysql.connector.connect(
  host="localhost",
  user="kyle",
  password="123456",
  database="smart_home"
 )
 time.sleep(2)
 mycursor= mydb.cursor()
 mycursor.execute("SELECT DEVICE,STATE FROM myhome")
 myresult = mycursor.fetchall()
# TEMP = random.randint(17, 38)
#  print(myresult[0][0])
#  print(myresult)
 if (myresult[0][0] =='Light' and myresult[0][1]=='On'):
  print("Light is On")
 elif (myresult[0][0] =='Light' and myresult[0][1]=='OFF'):
  print("Light is Off")
 if (myresult[1][0] =='Fan' and myresult[1][1]=='On'):
  print("Fan is running")
 elif (myresult[1][0] =='Fan' and myresult[1][1]=='OFF'):
  print("Fan is Off")
 del myresult





