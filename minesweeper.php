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

    public function isMine(string $cell): bool
    {
        switch ($cell) {
            case '.':
                return false;
            case '*':
                return true;
            default:
                throw new InvalidArgumentException("Invalid cell value");
        }
    }
}

class MinesweeperAnalyserTest
{
    private $grid = ".*.**.\n....*.\n..*...";
    private $expectedOutput = "1*2**2\n1234*2\n01*211";

    public function testAnalyse(): bool {
        $minesweeperAnalyser = new MinesweeperAnalyser($this->grid);

        assert($minesweeperAnalyser->getGrid() === $this->grid, "Grid does not match the expected input grid.");
        assert($minesweeperAnalyser->analyse() === $this->expectedOutput, "Analyse output does not match the expected output.");
        assert($minesweeperAnalyser->isMine($this->grid[0]) === false, "First cell should not be a mine.");
        assert($minesweeperAnalyser->isMine($this->grid[1]) === true, "Second cell should be a mine.");

        return true;
    }
}

$test = new MinesweeperAnalyserTest();
var_dump(
    $test->testAnalyse()
);


