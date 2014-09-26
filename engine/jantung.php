<?

include_once 'otak.php';
include_once 'meja.php';
include_once 'tukangbaca.php';

class JalaninRobotGedeg
{
    private $robot = null;

    public function __construct($argv)
    {
        $this->robot = new RobotGedeg(new Meja(5, 5));

        for ($i = 1; $i < sizeof($argv); $i++) {
            $this->jalaninFile($argv[$i]);
        }
    }

    private function jalaninFile($filename)
    {
        $tukangBaca = new TukangBaca($filename);
        $commands 	= $tukangBaca->getCommands();

        if ($commands !== null) {
            print('*** ' . $filename . " ***\n");

            foreach ($commands as $command) {
                if ($command == 'MOVE') {
                    $this->robot->move();
                } elseif ($command == 'LEFT') {
                    $this->robot->left();
                } elseif ($command == 'RIGHT') {
                    $this->robot->right();
                } elseif ($command == 'REPORT') {
                    print($this->robot->report() . "\n");
                } else {
                    $placeArgs = preg_split("/[\s,]+/", $command);
                    $this->robot->place(
                        intval($placeArgs[1]),
                        intval($placeArgs[2]),
                        $placeArgs[3]
                    );
                }
            }

            print('*** End of ' . $filename . " ***\n\n");
        }
    }
}

?>