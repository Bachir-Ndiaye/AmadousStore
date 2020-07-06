# AmadousStore
A platfofrm to search for an instrument (basse, guitare, piano....)

-----------------------------
What is the project aim for ?
-----------------------------
You can search via the search input box for an instrument. Bass, guitar, drum, keyboard...
It will display the data of according to what is in the database.

-----------
Framework ?
-----------
I'm using Symfony 5 for this project. Just download the zip file, extrat it and go to your IDE (VSC, Sublime Text, PHPStorm... whatever).
At top left, click to File, then after the dropdown of the menu click OPEN and select the project according to where you put it.

-------------
Configuration
-------------
 - Configure the value of your DATABASE_URL environment variable in the .env file. Create the database with the command : php bin/console doctrine:database:create
 - Load fixtures data to fill the database. Go to your ide's terminal and run this command : php bin/console doctrine:fixtures:load
 
 Now you can test the app locally. 
 
 Have fun and let me know if you have questions or suggestions. 

