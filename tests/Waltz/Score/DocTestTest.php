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

use Waltz\Score\DocTest;

/**
 * DocTestTest
 *
 * @uses PHPUnit_Framework_TestCase
 * @package Waltz.Score
 */
class DocTestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * test_getTargetFilePaths
     */
    public function test_getTargetFilePaths ( ) {
        $targetDir = __DIR__ . '/data/one_file';
        $expected = array(
                          "$targetDir/file1",
                         );
        $score = new DocTest($targetDir);
        $this->assertSame($expected, $score->getTargetFilePaths());
    }

    /**
     * test_getTestFilesPath
     */
    public function test_getTestFilesPath (  )
    {
        $targetDir = __DIR__ . '/data/one_file';
        $testFilesPath = __DIR__ . '/data/testfiles';
        $score = new DocTest($targetDir);
        $score->setTestFilesPath($testFilesPath);
        $this->assertSame($testFilesPath, $score->getTestFilesPath());
    }

    /**
     * test_getTestFilesPath_Without_Setting_Test_Files_Path
     */
    public function test_getTestFilesPath_Without_Setting_Test_Files_Path (  )
    {
        $targetDir = __DIR__ . '/data/one_file';
        $score = new DocTest($targetDir);
        $expected = sys_get_temp_dir();
        $this->assertSame($expected, $score->getTestFilesPath());
    }
}
