#Software Engineering 2016 GROUP 8
######Software Engineering Spring 2016; Josh Lewis:Jeremy Warden:Kaitlin Anderson:Han Chen 
---

Welcome to Software Sharks! We are currently developing a prototype for scheduling workers in a restuant.  Personally, I (Jeremy) have worked in a resturant since I was legally able to.  During my time in the resturant industry I noticed one of the most time consuming duties for management was creating the weekly schedule.  Who is available when? Who requests off when? When is each employees availble in time? Long story short, ITS A MESS TO DO THIS BY HAND! Yes, there are other peices of software out there, lets say Hot Schedule for example, that already have successfully created this software.  Yet, Hot Scheudles is rather expensive for the employeer.  In order to understand more behind the reason of the price Hot Schedule charges, the Software Sharkes decided to take a look into what goes on while creating a scheduling application and to get more insight as to why these other apps already on the market are so damn expensive. So lets get this started!

---

### Steps to Deploy Schedule Shark!

I am under the assumption you have the knowlege to set up a LAMP stack

1. Begin by deploying the database, the .sql file is located inside of the MODEL folder in this repository

2. Next, We need to deploy our User Interface, to do this, move the VIEW folder onto your designated server

3. Finally, We need to add functionallity to our view with our controller. We have constructed our own API for our application, you will find all of the PHP functions inside of the CONTROLLER folder, You must deploy the controller .php pages into the same folder as your view pages on your server.


### Please proceed by following the instructions on screen for registration

4. To get things started, this is a private application. Meaning: not just any user can register, you must have been given a code by your manager in order to create your own account. To start off, you need to run this SQL statement on your database:

  INSERT INTO Code_Keep VALUES('1000','1')
  
  This will generate the code 1000 for you to use, and the number 1 represents a manager ID. Once the code is in your Code_Keep Table on your database, proceed by accessing the index.php page through your webrowser.  

4. Follow instructions to register, and use the code 1000 you just created above in order to move forward with the registration.

5. Once you have complete registration, you will be on the adminhome.php page. This page allows us to generate other codes in order to allow other employees to register without messing with the command line to do so.

Our application is still in development, but for 4 weeks of work (2 weeks of strictly coding) We are very happy with the progress we mode, and we look forward to completing this application in the future! 
