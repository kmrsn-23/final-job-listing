##  Job Board Project
Kemerson D. Fernandez
Job Listing (API Calling)

---
## Project Description
This is a web-based Job Listing system that handles job posts using backend API routes and an SQLite database file. It has validation rules built into the code to catch errors or empty inputs before anything gets saved. You can use Postman to test all the CRUD functions (adding, viewing, updating, and deleting jobs), and any saved jobs will load directly onto the frontend browser view.

---

In this demonstration, I tested the API-CALL for the Job Listing system using Postman to showcase the HTTP methods and CRUD workflow within an SQLite database. I started with a POST request (supposed to be the GET first but I forgot it), I initially made the mistake of passing an empty request to see if the validation rules would catch it, and it successfully threw an error.Then I input a valid data then it successfully done. Once I corrected the data and sent it again, the record was saved with ID number 2 supposed to be 1 but Ive already use it, which I also verified by opening the browser. Finally, I tested the PUT, PATCH, and DELETE methods using the URL ending in /2 for ID number 2, and checked the my browser to confirm that  API calls successfully processed and updated the records.

CLICK HERE TO WATCH THE VIDEO DEMO:
https://drive.google.com/drive/folders/153Vfd-t9YbXx8COk6edDXU5wDdMzcaXD?usp=sharing
