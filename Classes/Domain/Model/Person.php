<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Iris Schilke <ischilke@googlemail.com>, Kaitzbach Webdesign
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package ddarchiv
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Ddarchiv_Domain_Model_Person extends Tx_Extbase_DomainObject_AbstractEntity {
    
  /**
	 * akademischer Grad, Adelstitel
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * Familienname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Vorname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $firstname;

	/**
	 * Geburtsjahr
	 *
	 * @var integer
	 */
	protected $birthYear;

	/**
	 * Geburtsdatum (Jahr 1970 oder später)
	 *
	 * @var integer
	 */
	protected $birthDate;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the firstname
	 *
	 * @return string $firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets the firstname
	 *
	 * @param string $firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Returns the birthYear
	 *
	 * @return integer $birthYear
	 */
	public function getBirthYear() {
		return $this->birthYear;
	}

	/**
	 * Sets the birthYear
	 *
	 * @param integer $birthYear
	 * @return void
	 */
	public function setBirthYear($birthYear) {
		$this->birthYear = $birthYear;
	}

	/**
	 * Returns the birthDate
	 *
	 * @return integer $birthDate
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}

	/**
	 * Sets the birthDate
	 *
	 * @param integer $birthDate
	 * @return void
	 */
	public function setBirthDate($birthDate) {
		$this->birthDate = $birthDate;
	}

}
?>
