#!/usr/bin/python3

# -*- coding: UTF-8 -*-# enable debugging
import cgi
import cgitb

cgitb.enable()
print("Content-Type:text/html;charset=utf-8")
print()
print("<h1>The Information about Suppliers(sid,name,address,cost and part name):    </h1>      ")

form=cgi.FieldStorage()

cost=form.getvalue("cost_input2")



import pymysql
db=pymysql.connect(
    host="database-1.cntkybi4hyxn.ca-central-1.rds.amazonaws.com",
    port=3306,
    user='admin',
    passwd='Sxchhw0533zibo',
    db='SupplyDB')





cursor1=db.cursor()
sql0="select Suppliers.sid,Suppliers.sname,Suppliers.address,Catalog.cost,Parts.pname from Suppliers Inner Join Catalog On Suppliers.sid=Catalog.sid Inner Join Parts On Parts.pid=Catalog.pid where Catalog.cost>=%s"


cursor1.execute(sql0,cost)
data=cursor1.fetchall()
length=data.__len__()


print("<table><tr><th>Sid</th><th>Name</th><th>Address</th><th>Cost</th><th>Part Name</th></tr>")

for i in range(length):
    print("<tr>")
    for j in range(data[i].__len__()):
        print("<td>")
        print(data[i][j])
        print("</td>")

    print("</tr>")

print("</table>")


print("<h1>Input Cost is  "+cost+"</h1>")
db.close()