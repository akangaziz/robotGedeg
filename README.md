robotGedeg
==========

robotGedeg is a crazy robot

===

Description
This is a simulator of a “toy robot”. You will be writing code to place and move the “robot” within a grid on a tabletop. No graphical output is required.

The robot will be placed and move on a square tabletop, of dimensions 5 units x 5 units.
There are no other obstructions on the table surface.
The robot is free to roam around the surface of the table, but must be placed within the table grid and prevented from falling to destruction. Any placement or movement that would result in the robot falling from the table must be ignored, however further valid movement commands must still be allowed.
Create an application that can read in commands of the following form:
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

Process

Create a free Github account for this code
Commit your code every 10 minutes as you do the task so we can see progress
Spend a maximum of 3 hours

Deliverables

The source code files
Unit tests to provide the test coverage you believe is required
Test data (in files) to exercise the application.
Instructions for running the tests and the application

