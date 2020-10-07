# Routing

In the context of a server-side web application, a routing system is the part of the web application that maps an HTTP request to a request handler (function/method). 

An HTTP request consists of a header and optionally a body. The header contains information about the request for example the method, path and host. Some methods like GET, HEAD, and OPTIONS do not make use of the request body while others like POST, PUT, and PATCH use it to pass data from a client to a server.

Using a routing system allows us to structure our application in a better way instead of designating each request to a file.

A routing system works by mapping an HTTP request to a request handler based on the request method and path specified in the URL of the request. This is exactly what we are going to build in this tutorial.

In this case, a new route named: new_route.php is created with as a small example:

![alt text](./resources/routes1.png "Laravel default page")
This is a simple example of a router that returns a Hello World.


And in this case this is a router named contac.php that returns a view named contact.
![alt text](./resources/routes2.png "Laravel default page")


# Setup a database connection

First step is to directly go to the .env file, this is where enviroment variables are saved and set. If you directly go to config/database.php you can check all the most and needed variables from each database you might want to use. In this case if you go directly to check mysql 