# courier_management_system

**Description:**
With the arrival of the pandemic, it was very difficult for personal movement as it was restricted. Delays and losses were the two primary troubles which both the business and customer faced, this is were an efficient model of courier service system comes into effect, This project deals with courier service system and used for daily activities such as booking, tracking, maintaining, booking details, maintaining hub details, pick up and drop time of courier parcel, nondelivery etc.

**Problem Statement:**
The courier management system is supposed to be effective and utilize the resources in an optimum manner to ensure timely service with least cost. Every 
aspect of the operation from pickup/receipt must be logged properly. The movement of goods between hubs or zones will have a time limit set under which it must be completed. The last mile delivery will also be important as a lot of delays happen here due to time taken to locate the receiver. Any packages which remain undelivered or unclaimed will be notified to the receiver first and then the sender. The receiver will be sent a tracking ID by the courier service company through SMS/email. This can be used to track its movement. It is not easy to do this process manually because it would become very hectic. Hence it is suggested to automate the process by developing the relevant software as the world is moving from manual working to an information and technology era where automation becomes important in all parts of life.

**Objectives:**
The Proposed System is eliminating all problems manual work. The main objective of the courier Service system is to manage the details of courier, email notification, delivery, customer, manages all the information about courier, bill customer courier.

**Entities:**
1. Courier
2. Customer
3. Branch
4. Employee
5. Shipment
6. Delivery
7. User
8. Role 

**Attributes:**
1. Courier: prod_id, courier_id, courier_weight, courier_type, cust_id, 
prod_desc
2. Customer: cust_id, cust_pass, cust_name, cust_email, cust_addr, cust_ph
3. Branch: branch_id, branch_name, branch_ph, emp_id, branch_addr
4. Employee: emp_name, emp_id, emp_ph, emp_rating, emp_email,branch_id
5. Shipment: ship_id, ship_desc, ship_date, cust_id
6. Delivery: del_type, del_addr, del_id, cust_id, del_by, del_date
7. User: username, user_id, user_pass
8. Role : role_name, role_desc


SQL File is Attached in source code file..

Filename-couriermanage.sql
