<?php
/**
 * This file is part of the Waltz.Score package
 *
 * (c) Tomoki Kobayashi <tom@stellaqua.com>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace Waltz\Score;

/**
 * SimpleTest
 * 
 * @uses PHPUnit_Framework_TestCase
 * @package Waltz.Score
 */
class SimpleTest extends \PHPUnit_Framework_TestCase
{
    public function test_getTargetFilePathList ( ) {
        $targetPath = __DIR__ . '/data/one_file';
        $targetFilePathList = array(
                                    "$targetPath/file1",
                                   );
        $score = new Simple($targetPath);
        $this->assertSame($targetFilePathList, $score->getTargetFilePathList());
    }
}
