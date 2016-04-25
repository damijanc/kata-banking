<?php

class GameOfLifeTest extends PHPUnit_Framework_TestCase {

    public function testIsInstance()
    {
        $game = new GameOfLife();

        $this->assertInstanceOf(GameOfLife::class, $game);
    }

    public function testInitBoard()
    {
        $game = new GameOfLife();

        $this->assertCount(0, $game->getCells());
    }


    public function testAddCell()
    {
        $game = new GameOfLife();

        $this->assertSame(true,$game->addCell(1,1));
    }

    public function testGetCell()
    {
        $game = new GameOfLife();
        $game->addCell(1,1);

        $this->assertSame(1,$game->getCell(1,1));
    }

    public function testGetNeighbors()
    {
        $game = new GameOfLife();
        $game->addCell(1,1);
        $game->addCell(1,2);

        $this->assertSame(1,$game->getNeighboursCount(1,1));
    }

    public function testCellIsAlive()
    {
        $game = new GameOfLife();
        $game->addCell(1,1);

        $this->assertTrue($game->isCellAlive(1,1));
    }


    public function testProcess()
    {
        $game = new GameOfLife();
        $game->process();
    }

}	