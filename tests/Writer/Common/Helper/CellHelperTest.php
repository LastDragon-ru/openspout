<?php

namespace OpenSpout\Writer\Common\Helper;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class CellHelperTest extends TestCase
{
    public function dataProviderForTestGetColumnLettersFromColumnIndex(): array
    {
        return [
            [0, 'A'],
            [1, 'B'],
            [25, 'Z'],
            [26, 'AA'],
            [28, 'AC'],
        ];
    }

    /**
     * @dataProvider dataProviderForTestGetColumnLettersFromColumnIndex
     */
    public function testGetColumnLettersFromColumnIndex(int $columnIndex, string $expectedColumnLetters)
    {
        static::assertSame($expectedColumnLetters, CellHelper::getColumnLettersFromColumnIndex($columnIndex));
    }
}
