<?php

namespace Spout\Writer\Common\Manager;

use OpenSpout\Common\Entity\Cell;
use OpenSpout\Common\Entity\Row;
use OpenSpout\Writer\Common\Manager\RowManager;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class RowManagerTest extends TestCase
{
    public function dataProviderForTestIsEmptyRow(): array
    {
        return [
            // cells, expected isEmpty
            [[], true],
            [[new Cell('')], true],
            [[new Cell(''), new Cell('')], true],
            [[new Cell(''), new Cell(''), new Cell('Okay')], false],
        ];
    }

    /**
     * @dataProvider dataProviderForTestIsEmptyRow
     */
    public function testIsEmptyRow(array $cells, bool $expectedIsEmpty)
    {
        $rowManager = new RowManager();

        $row = new Row($cells, null);
        static::assertSame($expectedIsEmpty, $rowManager->isEmpty($row));
    }
}
