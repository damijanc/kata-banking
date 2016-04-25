<?php

class GameOfLife
{
    private $board;


    public function init()
    {
        $this->board = [
            [new Cell(0, 0), new Cell(0, 1), new Cell(0, 2)],
            [new Cell(1, 0), new Cell(1, 1), new Cell(1, 2)],
            [new Cell(2, 0), new Cell(2, 1), new Cell(2, 2)],
        ];
    }

    public function __construct()
    {
        $this->init();
    }

    public function getCells()
    {
        return [];
    }

    public function process()
    {
        foreach ($this->board as $row) {
            foreach ($row as $cell) {
                $cell = $this->applyRules($cell);
            }
        }
    }

    public function applyRules(Cell $cell)
    {
        $cell = $this->killTheFuckingCellRule($cell);
        $cell = $this->fourNeighboursRule($cell);

        return $cell;
    }

    public function killTheFuckingCellRule(Cell $cell)
    {
        $numberOfNeighbours = $this->getNeighboursCount($cell->getX(),$cell->getY());

        if ($numberOfNeighbours < 2 || $numberOfNeighbours > 3) {
            $cell->setDead();
        }

        return $cell;
    }

    public function fourNeighboursRule(Cell $cell)
    {
        $numberOfNeighbours = $this->getNeighboursCount($cell->getX(),$cell->getY());

        if ($numberOfNeighbours === 4 ) {
            $cell->setAlive();
        }

        return $cell;
    }


    public function makeDead($x, $y)
    {

    }

    public function addCell($x, $y)
    {
        $this->board[$x][$y] = 1;
        return true;
    }

    public function getCell($x, $y)
    {
        return $this->board[$x][$y];
    }

    public function isCellAlive($x, $y)
    {
        return true;
    }

    public function getNeighboursCount($x, $y)
    {
        //get the cell x-1, x+1, y-1, y+2
        $count = 0;

        if(isset($this->board[$x][$y+1]) && 1 === $this->board[$x][$y+1] ){
            $count ++;
        }

        if(isset($this->board[$x][$y-1]) && 1 === $this->board[$x][$y-1] ){
            $count ++;
        }
        if(isset($this->board[$x+1][$y]) && 1 === $this->board[$x+1][$y]){
            $count ++;
        }
        if(isset($this->board[$x-1][$y]) && 1 === $this->board[$x-1][$y]){
            $count ++;
        }

        return $count;
    }


}