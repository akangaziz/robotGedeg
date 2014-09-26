<?

class Meja
{
    private $meja = null;

    public function __construct($xMax = 1, $yMax = 1)
    {
        $this->meja =   array_fill(
                                0,
                                $xMax,
                                array_fill(0, $yMax, true)
                            );
    }

    public function getXMax()
    {
        return sizeof($this->meja);
    }

    public function getYMax()
    {
        return sizeof($this->meja[0]);
    }

    public function getSquare($x, $y)
    {
        if ($this->isValidXY($x, $y)) {
            return $this->meja[$x][$y];
        } else {
            return null;
        }
    }

    public function isValidXY($x, $y)
    {
        $isInt =    is_int($x) &&
                    is_int($y);

        $withinRange =  $x >= 0 &&
                        $y >= 0 &&
                        $x < $this->getXMax() &&
                        $y < $this->getYMax();

        if ($isInt && $withinRange) {
            return true;
        } else {
            return false;
        }
    }
}
?>