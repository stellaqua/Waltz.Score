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

use Waltz\Stagehand\FileUtility;

/**
 * Simple Score
 * 
 * @uses ScoreInterface
 * @package Waltz.Score
 */
class Simple implements ScoreInterface
{
    /**
     * Test file paths
     * 
     * @var array
     */
    private $_testFilePaths;

    /**
     * Constructor
     *
     * @param string $testFileTargetPath
     */
    public function __construct ( $testFileTargetPath ) {
        $testFilePaths = FileUtility::listFilePaths($testFileTargetPath);
        $this->_testFilePaths = $testFilePaths;
    }

    /**
     * getTestFilePaths
     * 
     * @return array Test file paths
     */
    public function getTestFilePaths ( ) {
        return $this->_testFilePaths;
    }
}
