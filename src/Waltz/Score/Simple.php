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
    private $_targetFileList;

    /**
     * __construct 
     * 
     * @param string $targetPath
     */
    public function __construct ( $targetPath ) {
        $targetFilePathList = FileUtility::listFilePath($targetPath);
        $this->_targetFilePathList = $targetFilePathList;
    }

    /**
     * getTargetFilePathList 
     * 
     * @return array Target file path list
     */
    public function getTargetFilePathList ( ) {
        return $this->_targetFilePathList;
    }
}
