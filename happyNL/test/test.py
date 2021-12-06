#!/usr/bin/python3

# -*- coding: UTF-8 -*-# enable debugging
import cgi
import cgitb

cgitb.enable()
print("Content-Type:text/html;charset=utf-8")
print()
print("<h1>The Information about Suppliers(sid,name,address and cost):    </h1>      ")

form=cgi.FieldStorage()

part_name=form.getvalue("part_input")



import pymysql
db=pymysql.connect(
    host="database-1.cntkybi4hyxn.ca-central-1.rds.amazonaws.com",
    port=3306,
    user='admin',
    passwd='Sxchhw0533zibo',
    db='SupplyDB')





cursor1=db.cursor()
sql0="select Suppliers.sid,Suppliers.sname,Suppliers.address,Catalog.cost from Suppliers Inner Join Catalog On Suppliers.sid=Catalog.sid Inner Join Parts On Parts.pid=Catalog.pid where Parts.pname=%s"
sql1="select pid from Parts where pname=%s"
#cursor1.execute(sql1,part_name)
cursor1.execute(sql0,part_name)
data=cursor1.fetchall()
array=[]
length=data.__len__()
print("<table><tr><th>Sid</th><th>Name</th><th>Address</th><th>Cost</th></tr>")

for i in range(length):
    print("<tr>")
    for j in range(data[i].__len__()):
        print("<td>")
        print(data[i][j])
        print("</td>")

    print("</tr>")

print("</table>")

print("<h1>Part Name is  "+part_name+"</h1>")
db.close()