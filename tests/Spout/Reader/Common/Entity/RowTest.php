<?php

namespace Box\Spout\Reader\Common\Entity;

class RowTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Cell
     */
    private function getCellMock()
    {
        return $this->createMock(Cell::class);
    }

    /**
     * @return void
     */
    public function testValidInstance()
    {
        $this->assertInstanceOf(Row::class, new Row([], null));
    }

    /**
     * @return void
     */
    public function testSetCells()
    {
        $row = new Row([], null);
        $row->setCells([$this->getCellMock(), $this->getCellMock()]);

        $this->assertEquals(2, count($row->getCells()));
    }

    /**
     * @return void
     */
    public function testSetCellsResets()
    {
        $row = new Row([], null);
        $row->setCells([$this->getCellMock(), $this->getCellMock()]);

        $this->assertEquals(2, count($row->getCells()));

        $row->setCells([$this->getCellMock()]);

        $this->assertEquals(1, count($row->getCells()));
    }

    /**
     * @return void
     */
    public function testGetCells()
    {
        $row = new Row([], null);

        $this->assertEquals(0, count($row->getCells()));

        $row->setCells([$this->getCellMock(), $this->getCellMock()]);

        $this->assertEquals(2, count($row->getCells()));
    }

    /**
     * @return void
     */
    public function testAddCell()
    {
        $row = new Row([], null);
        $row->setCells([$this->getCellMock(), $this->getCellMock()]);

        $this->assertEquals(2, count($row->getCells()));

        $row->addCell($this->getCellMock());

        $this->assertEquals(3, count($row->getCells()));
    }

    /**
     * @return void
     */
    public function testFluentInterface()
    {
        $row = new Row([], null);
        $row
            ->addCell($this->getCellMock())
            ->setCells([]);

        $this->assertTrue(is_object($row));
    }
}