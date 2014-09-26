robotGedeg
==========

robotGedeg is a crazy robot. 

===

<h1>Description</h1>
This is a simulator of a “toy robot”. You will be writing code to place and move the “robot” within a grid on a tabletop. No graphical output is required.

The robot will be placed and move on a square tabletop, of dimensions 5 units x 5 units.
There are no other obstructions on the table surface.

The robot is free to roam around the surface of the table, but must be placed within the table grid and prevented from falling to destruction. Any placement or movement that would result in the robot falling from the table must be ignored, however further valid movement commands must still be allowed.

An application that can read in commands of the following form:

PLACE X,Y,F
MOVE
LEFT
RIGHT
REPORT

PLACE will put the toy robot on the table in position X,Y and facing NORTH, SOUTH, EAST or WEST.
The origin (0,0) can be considered to be the SOUTH WEST most corner.

The first valid command to the robot is a PLACE command, after that, any sequence of commands may be issued, in any order, including another PLACE command. The application should discard all commands in the sequence until a valid PLACE command has been executed.
MOVE will move the toy robot one unit forward in the direction it is currently facing.

LEFT and RIGHT will rotate the robot 90 degrees in the specified direction without changing the position of the robot.
REPORT will announce the X,Y and F of the robot. This can be in any form, but standard output is sufficient. An example of the format: 2,3,NORTH

Input can be from a file, or from standard input, as the developer chooses.
￼
Example Input and Output:
a)
Input:

PLACE 0,0,NORTH
MOVE
REPORT

Output:

0,1,NORTH

b)
Input

PLACE 0,0,NORTH
LEFT
REPORT

Output:

0,0,WEST

c)
Input

PLACE 1,2,EAST
MOVE
MOVE
LEFT
MOVE
REPORT

Output:

3,3,NORTH

<h1>Installation</h1>
1. Clone the github:
	git clone https://github.com/akangaziz/robotGedeg.git

2. cd robotGedeg
3. Then running the robot with input command:
	php robotGedeg.php sampledata/sample1.txt

<h1>Sample Data </h1>
Put your sample data command in folder sampledata, for example sampledata/simple1.txt as following:

PLACE 0, 0, NORTH
MOVE
REPORT

<h1>Run Robot via Command Line</h1>

$ php robotGedeg.php sampledata/sample1.txt

*** sampledata/sample1.txt ***
Output: 0, 1, NORTH
*** End of sampledata/sample1.txt ***

$ php robotGedeg.php sampledata/sample2.txt
*** sampledata/sample2.txt ***
Output: 0, 0, WEST
*** End of sampledata/sample2.txt ***

$ php robotGedeg.php sampledata/sample3.txt
*** sampledata/sample3.txt ***
Output: 3, 3, NORTH
*** End of sampledata/sample3.txt ***

