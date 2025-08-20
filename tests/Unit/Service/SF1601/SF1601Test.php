<?php declare(strict_types=1);

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Tests\Unit\Service\SF1601;

use ItkDev\Serviceplatformen\Service\SF1601\SF1601;
use PHPUnit\Framework\TestCase;

final class SF1601Test extends TestCase
{
    private static \ReflectionMethod $sanitizeFilename;

    public static function setUpBeforeClass(): void
    {
        self::$sanitizeFilename = new \ReflectionMethod(SF1601::class, 'sanitizeFilename');
    }

    private function sanitizeFilename(string $filename, string $replacer = '-'): string
    {
        return self::$sanitizeFilename->invoke(null, $filename, $replacer);
    }

    /** @dataProvider sanitizeFilenameProvider */
    public function testSanitizeFilename(string $filename, string $expected): void
    {
        $actual = $this->sanitizeFilename($filename);
        $this->assertEquals($expected, $actual);
    }

    /** @dataProvider sanitizeFilenameWithReplacerProvider */
    public function testSanitizeFilenameWithReplacer(string $filename, string $replacer, string|\Exception $expected): void
    {
        if ($expected instanceof \Exception) {
            $this->expectException($expected::class);
        }
        $actual = $this->sanitizeFilename($filename, $replacer);
        $this->assertEquals($expected, $actual);
    }

    public static function sanitizeFilenameProvider(): iterable
    {
        yield ['a.pdf', 'a.pdf'];

        // The ones we cannot use

        // <
        yield ['a<b.pdf', 'a-b.pdf'];
        yield ['a<b<c.pdf', 'a-b-c.pdf'];
        yield ['a<<c.pdf', 'a-c.pdf'];
        // >
        yield ['a>b.pdf', 'a-b.pdf'];
        // :
        yield ['a:b.pdf', 'a-b.pdf'];
        // "
        yield ['a"b.pdf', 'a-b.pdf'];
        // /
        yield ['a/b.pdf', 'a-b.pdf'];
        // \
        yield ['a\b.pdf', 'a-b.pdf'];
        // |
        yield ['a|b.pdf', 'a-b.pdf'];
        // ?
        yield ['a?b.pdf', 'a-b.pdf'];
        // *
        yield ['a*b.pdf', 'a-b.pdf'];
        // CR
        yield ['a'."\n".'b.pdf', 'a-b.pdf'];
        // LF
        yield ['a'."\r".'b.pdf', 'a-b.pdf'];
        // CRLF
        yield ['a'."\n\r".'b.pdf', 'a-b.pdf'];
        // U+00A0
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2000
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2001
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2002
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2003
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2004
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2005
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2006
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2007
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2008
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2009
        yield ['a b.pdf', 'a-b.pdf'];
        // U+200A
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2028
        yield ['a b.pdf', 'a-b.pdf'];
        // U+205F
        yield ['a b.pdf', 'a-b.pdf'];
        // U+2060
        yield ['a⁠b.pdf', 'a-b.pdf'];
        // U+3000
        yield ['a　b.pdf', 'a-b.pdf'];

        // Some we can use

        yield ['a💩b.pdf', 'a💩b.pdf'];
        yield ['a👻b.pdf', 'a👻b.pdf'];
    }

    public static function sanitizeFilenameWithReplacerProvider(): iterable
    {
        yield ['a<b.pdf', '-', 'a-b.pdf'];
        yield ['a<b<c.pdf', '-', 'a-b-c.pdf'];
        yield ['a<<c.pdf', '-', 'a-c.pdf'];

        yield ['a<b.pdf', '💩', 'a💩b.pdf'];
        yield ['a<b<c.pdf', '💩', 'a💩b💩c.pdf'];
        yield ['a<<c.pdf', '💩', 'a💩c.pdf'];

        yield ['a<b.pdf', '', new \InvalidArgumentException('Replacer must have length 1')];
        yield ['a<b.pdf', '>', new \InvalidArgumentException('Replacer contains invalid character')];
    }
}
