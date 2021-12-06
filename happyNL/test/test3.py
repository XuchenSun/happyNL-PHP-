#!/usr/bin/python3

# -*- coding: UTF-8 -*-# enable debugging
import cgi
import cgitb

cgitb.enable()
print("Content-Type:text/html;charset=utf-8")
print()
print("<h1>The Information about Suppliers(only return the supplier who charge the most):    </h1>      ")

form=cgi.FieldStorage()

pid=form.getvalue("pid_input")



import pymysql
db=pymysql.connect(
    host="database-1.cntkybi4hyxn.ca-central-1.rds.amazonaws.com",
    port=3306,
    user='admin',
    passwd='Sxchhw0533zibo',
    db='SupplyDB')





cursor1=db.cursor()
sql0="select Suppliers.sid,Suppliers.sname,Suppliers.address,Catalog.cost,Parts.pname from Suppliers Inner Join Catalog On Suppliers.sid=Catalog.sid Inner Join Parts On Parts.pid=Catalog.pid where Parts.pid=%s order by Catalog.cost DESC"
sql1="order by Catalog.cost DESC"
cursor1.execute(sql0,pid)
data=cursor1.fetchone()
length=data.__len__()

print("<table><tr><th>Sid</th><th>Name</th><th>Address</th><th>Cost</th><th>Part Name</th></tr><tr>")

for i in range(length):
    
    
    print("<td>")
    print(data[i])
    print("|</td>")

    

print("</tr></table>")

print("<h1>Input Pid is  "+pid+"</h1>")
db.close()