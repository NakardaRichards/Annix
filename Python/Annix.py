# Importing module
import mysql.connector

# Creating connection object
annix = mysql.connector.connect(
    host="localhost",
    user="root",
    password="cenation2",
    database ="annix"

)
cursor = annix.cursor()

# Show existing tables
cursor.execute("SHOW TABLES")

for x in cursor:
    print(x)