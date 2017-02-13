# **PHP Queen Attack**
#### Stella Huayhuaca, Brendan Grubb, 2/13/2017

&nbsp;
## Description
In chess, a queen can move horizontally, vertically, and diagonally, making it the most powerful piece on the board. If another piece is within its line of sight along these three lines, then the queen can attack it.

Here is the end goal: We're going to make a website in Silex where the user can enter an X and a Y coordinate for the queen, and an X and a Y coordinate for another chess piece which the queen is attacking.

When the user submits the form, you should create an instance of a Queen class, with properties for its current X and Y coordinates. This Queen class should have a method called canAttack, which takes an X and a Y coordinate as arguments.

The method should return true if the queen can attack the given space and false if it can't. A message should be displayed to show the result after the form for filling out the coordinates is submitted.

Remember to write your tests in plain english and get them checked first. Don't be tempted to write a single test for the true case (e.g., it 'is true if it can attack horizontally or vertically or diagonally') - there are three separate behaviors here for horizontal, vertical, and diagonal. Also remember to try to refactor or simplify your code as soon as you get something working.


&nbsp;
## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Queen x coordinate matches Opponent x coordinate | Queen X input is d, Queen Y input is 3 // Opponent X input is d and Opponent Y input is 8 | Queen wins attack |   
| Queen y coordinate matches Opponent y coordinate | Queen X input is a and Queen Y input is 7, Opponent X input is f and Opponent Y input is 7 | Queen wins attack |   
|  |  |  |
|  |  |  |
|  |  |  |



&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/Brendangrubb/queen)
* Download the zip file via the green button
* Unzip the file and open the **_queen-master_** folder
* Open Terminal, navigate to **_queen-master_** project folder, type **_composer install_** and hit enter
* Navagate Terminal to the **_queen-master/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [brendangrubb@gmail.com](mailto:brendangrubb@gmail.com)._

Copyright (c) 2017 Brendan Grubb

This software is licensed under the GPL license
