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
 * DocTest Score
 *
 * @uses ScoreInterface
 * @package Waltz.Score
 */
class DocTest implements ScoreInterface
{
    /**
     * Target file paths
     *
     * @var array
     */
    private $_targetFilePaths;

    /**
     * Test files path
     *
     * @var string
     */
    private $_testFilePath;

    /**
     * Constructor
     *
     * @param string $targetFileTargetPath
     */
    public function __construct ( $targetFileTargetPath ) {
        $targetFilePaths = FileUtility::listFilePaths($targetFileTargetPath);
        $this->_targetFilePaths = $targetFilePaths;
    }

    /**
     * Get target file paths
     *
     * @return array Target file paths
     */
    public function getTargetFilePaths ( ) {
        return $this->_targetFilePaths;
    }

    /**
     * Set test files path
     *
     * @param string $testFilesPath
     */
    public function setTestFilesPath ( $testFilesPath )
    {
        $this->_testFilesPath = $testFilesPath;
    }

    /**
     * Get test files path
     *
     * @return string Test files path
     */
    public function getTestFilesPath (  )
    {
        return $this->_testFilesPath;
    }
}
