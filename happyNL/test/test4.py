#!/usr/bin/python3

# -*- coding: UTF-8 -*-# enable debugging
import cgi
import cgitb

cgitb.enable()
print("Content-Type:text/html;charset=utf-8")
print()
print("<h1>The Information about Suppliers(part's name, part's color,suppliers' name and address):    </h1>      ")

form=cgi.FieldStorage()

color=form.getvalue("color_input")
address=form.getvalue("address_input")


import pymysql
db=pymysql.connect(
    host="database-1.cntkybi4hyxn.ca-central-1.rds.amazonaws.com",
    port=3306,
    user='admin',
    passwd='Sxchhw0533zibo',
    db='SupplyDB')





cursor1=db.cursor()
sql0="select Parts.pname,Parts.color,Suppliers.sid,Suppliers.sname,Suppliers.address from Suppliers Inner Join Catalog On Suppliers.sid=Catalog.sid Inner Join Parts On Parts.pid=Catalog.pid where Parts.color=%s and Suppliers.address=%s"

cursor1.execute(sql0,[color,address])
data=cursor1.fetchall()


length=data.__len__()

print("<table><tr><th>Part-Name</th><th>Part-Color</th><th>Sid</th><th>Name</th><th>Address</th></tr>")

for i in range(length):
    print("<tr>")
    for j in range(data[i].__len__()):
        print("<td>")
        print(data[i][j])
        print("</td>")

    print("</tr>")

print("</table>")


print("<h1>Color(input) is  "+color+"</h1>")
print("<h1>Address(input) is  "+address+"</h1>")
db.close()