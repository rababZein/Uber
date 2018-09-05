# Uber
# setup curl
sudo apt-get install php-curl
# setup keycloak
Go to link 
https://drive.google.com/open?id=1NiyW99Nf3q0VMHIANSNkGFGw442Zq7MU


Download keycloak file and extract it.
execute the following command to run keycloak:
cd /keycloak-3.0.0.Final/bin/
./standalone.sh 
To check the users data do the following:
from browser go to http://localhost:8080/auth/
choose Administration Console and enter the following:
username: admin
password: admin
from the menu in the left side, choose the realm: Demo-Realm 
then from the manger section in this section go to Users
click view all users then you will find list of all users
the id => I used it as driver reference number
# there are some users for drivers
#################################
username:test  && password:123
username:meena  && password:123
username:ahmed  && password:123
# Database Setup
###############
in the folder database you will find the dump file of database
in the file /api/config/database.php , please set your database credentials
# the add trip webservice
#########################
url: http://localhost/yourdirectory/api/trips/add.php
request type: post
body is json object like that: { "username":"meena" , "password":"123"}
header: Content-Type:application/json

