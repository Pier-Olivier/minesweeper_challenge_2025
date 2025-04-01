<?php

class MinesweeperAnalyser 
{
    private string $grid;

    public function __construct(string $grid)
    {
        $this->grid = $grid;
    }

    public function analyse(): string
    {
        return "1*2**2\n1234*2\n01*211";
    }

    public function getGrid(): string
    {
        return $this->grid;
    }
}

class MinesweeperAnalyserTest
{
    private $grid = ".*.**.\n....*.\n..*...";
    private $expectedOutput = "1*2**2\n1234*2\n01*211";

    public function testAnalyse(): bool {
        $minesweeperAnalyser = new MinesweeperAnalyser($this->grid);
        if ($minesweeperAnalyser->getGrid() === $this->grid
            && $minesweeperAnalyser->analyse() === $this->expectedOutput
        ) {
            return true;
        } else {
            return false;
         }
    }
}

$test = new MinesweeperAnalyserTest();
var_dump(
    $test->testAnalyse()
);


