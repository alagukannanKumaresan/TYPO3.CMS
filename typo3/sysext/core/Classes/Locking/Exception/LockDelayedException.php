<?php
namespace TYPO3\CMS\Core\Locking\Exception;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Daniel Hürtgen <huertgen@rheinschafe.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Lock delayed exception.
 *  Thrown if lock was delayed by another lock.
 *
 * @author Daniel Hürtgen <huertgen@rheinschafe.de>
 */
class LockDelayedException extends \TYPO3\CMS\Core\Locking\Exception {

	/**
	 * Holds retries needed to acquire.
	 *
	 * @var integer
	 */
	protected $retries;

	/**
	 * Constructs locked delayed exception.
	 *
	 * @param integer $retries
	 * @param string  $message
	 * @return \TYPO3\CMS\Core\Locking\Exception\LockDelayedException
	 */
	public function __construct($retries, $message = "") {
		$this->retries = (int) $retries;
		parent::__construct($message, 1361625275);
	}

	/**
	 * Getter for retries needed to acquire.
	 *
	 * @return integer
	 */
	public function getRetries() {
		return $this->retries;
	}

}

?>