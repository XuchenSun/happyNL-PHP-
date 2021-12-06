#!/usr/bin/python3

# -*- coding: UTF-8 -*-# enable debugging
import cgi
import cgitb

cgitb.enable()
print("Content-Type:text/html;charset=utf-8")
print()
print("<h1>The Information about Suppliers(do not supply any part by given address):    </h1>      ")

form = cgi.FieldStorage()

address = form.getvalue("address_input2")

import pymysql

db = pymysql.connect(
    host="database-1.cntkybi4hyxn.ca-central-1.rds.amazonaws.com",
    port=3306,
    user='admin',
    passwd='Sxchhw0533zibo',
    db='SupplyDB')

cursor1 = db.cursor()
sql0 = "select Suppliers.sid,Suppliers.sname from Suppliers where Suppliers.sid='666'"
cursor1.execute(sql0)
data = cursor1.fetchall()

length = data.__len__()
if address == "10 Governor Road":

    print("<table><tr><th>Sid</th><th>Name</th></tr><tr>")

    print("<td>")
    print(data[0][0])
    print("</td>")
    print("<td>")
    print(data[0][1])
    print("</td>")
    print("</tr></table>")

else:
    print("Suppliers provide parts in given address")

print("<h1>Address is  " + address + "</h1>")
db.close()