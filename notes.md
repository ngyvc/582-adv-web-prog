# 582-adv-web-prog

PHP OOP
MVC
SQL - KEYS - JOINs
Normalization
data integrity - CHECK
Security - escape & SQL injection
PDO & prepared query - ORM
Project 1
Application server - Intro to modern APIs
Monolith vs microservice arxhitecture & scaling
Project 2
TESTING

OCT
12
18 19
25 26
NOV
1 2
8 9
Project 1 - start
15 16
22 23
29 30
DEC
6 7
Project 2 - start
13 14
20 21
10
Project 2 - due

Step 1: Model and program classes using a web-side programming language

Step 2: Develop a simple dynamic website following an object-oriented design pattern

Step 3: Develop a dynamic Web site with an administrative interface following an object-oriented design pattern

In the first step, students continue to learn server-side Web programming by applying the principles of object-oriented programming already introduced in the previous Web programming courses. They review and deepen the basic notions of object-oriented programming (class, object, encapsulation, property, method, inheritance, etc.) and learn to apply them in the context of server-side programming.
They learn to model classes that meet the needs of the project and to develop them.
They learn to test the classes to ensure their operation and quality.
Finally, they learn more about the classes available in the PHP programming environment.
At the end of this step, students can use native classes as well as models, realize and test simple classes allowing access to data, the manipulation of requests and Http responses or the connection to the database.

In the second step, students will continue to learn server-side object-oriented programming by developing a simple dynamic Web site based on a design pattern such as Model-View-Controller (MVC). First, students are introduced to various design patterns and their characteristics. They will see how to apply such patterns and the contexts in which they are relevant. They will also be introduced to various types of Web project architectures and server response structures such as the three-tier architecture and Web services. At this stage, students will develop a dynamic Web site based on a common Web development architecture such as MVC. Finally, they will continue to learn about methods of validating their code by setting up an automated test suite.

In the third step, students will apply the concepts seen before and will be asked to develop a dynamic Web site including a complete and personalized administrative interface. Using a three-tier architecture and an appropriate design pattern, students will develop the functionalities for processing http requests, displaying content, updating data and logging in users. They will ensure the security of their code and its proper functioning by adequately planning the required tests. They will be introduced to the installation, configuration, management and use of external PHP code libraries. At the end of this step, students will be able to develop and deploy a complete dynamic Web site following a specific architecture and design pattern. They will be able to create a complete administrative interface to manage the site’s data, secure its code and ensure its quality.

Knowledge/topic:
Functions and main commands of version control software.
Principles and operation of branches.
Conflict management methods

Know-how:
Use version control software.
Submit modified source code
Branch management
Management of code conflicts

Knowledge/topic:
Native classes and external classes (library) for database management (connection, operation, etc.)
MySQL query optimization and validation techniques (prepared query, security, SQL injection, data integrity, etc.)
Type of data manipulation design patterns such as DAO.
Advanced techniques for handling incoming data (model development)

Know-how

Knowledge / Topics (remove those who belong to 3.2 to 3.3!)
Http response management classes
Cache management methods
Advanced techniques for responding to http requests (with and without data, development of Views, response format such as JSON, XML, etc)
Know-how
Create and program the http response classes (view)
Program the cache management

582 - Advanced Web Programming course notes
Task or production:
To produce a dynamic web site using a database by exploiting an object-oriented programming language and based on a specific design pattern.
Achievement context:

- from provided media (images, web page template, etc.) and a production estimate;
- individual test;
- under the direct supervision of a teacher;
- in the lab;
- duration of 3 hours at the end of the session;
- documentation allowed;

Proper analysis of production specifications - EHPA: 1.1 to 1.6 - 10 %
Proper use of language elements to process and display dynamic data - EHPA: 2.1 to 2.6 - 10 %
Proper application of object-oriented programming principles - EHP2: all - 20 %
Proper application of design patterns - EHPA: 2.1 to 2.6 - 15 %
Correct functioning of the realized product - EHP2: 1.1, 1.2, 3.1 to 3.3 - 25 %
Proper application of tests - EHPA: 2.1 to 2.6 - 10 %
Optimal quality of the programming - EHP2: 1.1, 1.2, 3.1 to 3.3 - 10 %

Monolith vs microservice arxhitecture? Not how to but what it is. And pitfalls of both. Most code base in Quebec are monoliths tho.
At least to be aware it exists.
The last sentence made me think of that "architecture"

OOP is a course per se. It's not Web related... I wouldn't teach it there but maybe day you can use it

And unit test for.christ sake

Learned those on the job and was enfuriated when I understood they NEVER talked about it in class of.cegep and uni

I mean to me advance Web programming is about yes architecture API vs monolithic, security basics, database types and db scaling pro and cons
And maybe queues for high trafic architecture
And the decision you have to make when building a photo system dedicated to ingest 5 millions photos per days vs 5 thousands
Open their.mind to the complexity of. Choicies
And that you try to take the best decision with the information you have at the time of such decision
We did that at work and it's a nice problem to solve. How not to kill your downstream third parties either haha! Like cloudinary in our case. How to limit your own and third party cloud costs
It's just weird to talk about oop imo
So unrelated to the title of the course
Web is security and scaling.
Make me want to teach. Cause frustrates me.
Actually redo the whole program cursus

ok so, my plan for the course:
PRIMARY KEYS
FOREIGN KEYS

Security - escape & SQL injection

Microservices vs. monolithic architecture
Breaking down a monolithic application

Q:
do they all have github accounts?
do they have education access?
how good are they in php?

[Bruce DEMO DB](https://github.com/brucenorton/web582_demo_db)
[Bruce Relational DB](https://github.com/brucenorton/relational_db/)
[Bruce Dynamic Web](https://nortonb.web582.com/)

[PHP Connect to MySQL](https://www.w3schools.com/php/php_mysql_connect.asp)

[PDO vs. MySQLi: The Battle of PHP Database APIs](https://websitebeaver.com/php-pdo-vs-mysqli)
[PHP PDO Prepared Statements Tutorial to Prevent SQL Injection](https://websitebeaver.com/php-pdo-prepared-statements-to-prevent-sql-injection#fetch-modes)

<!-- [PHP Tutorial](https://www.phptutorial.net/) -->

[PHP OOP](https://www.phptutorial.net/php-oop/)

[Atlassian - Microservices vs. monolithic architecture](https://www.atlassian.com/microservices/microservices-architecture/microservices-vs-monolith)

[AWS - What’s the Difference Between Monolithic and Microservices Architecture?](https://aws.amazon.com/compare/the-difference-between-monolithic-and-microservices-architecture/)

<!-- [AWS - Break a Monolithic Application into Microservices with AWS Copilot, Amazon ECS, Docker, and AWS Fargate](https://aws.amazon.com/tutorials/break-monolith-app-microservices-ecs-docker-ec2/)
[Node.js Microservices Deployed on EC2 Container Service](https://github.com/awslabs/amazon-ecs-nodejs-microservices) -->

[UI / UX Course](https://nortonb.web582.com/ui-ux/)

<!-- [ebooks](https://github.com/robby06) -->
<!-- [php_mysql projects](https://github.com/robby06/php_mysql/blob/master/Project02/User%20Authentication/change_passwd.php) -->

https://www.php.net/manual/en/function.ini-set.php

```
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```
