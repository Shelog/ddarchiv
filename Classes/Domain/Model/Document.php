<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Iris Schilke <ischilke@googlemail.com>, Kaitzbach Webdesign
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
class Tx_Ddarchiv_Domain_Model_Document extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Titel
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Beschreibung
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Standort (Karton, Mappe, Seite)
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $loc;

	/**
	 * Datum des Dokuments
	 *
	 * @var DateTime
	 */
	protected $docDate;

	/**
	 * geographische Länge
	 *
	 * @var float
	 */
	protected $longitude;

	/**
	 * geographische Breite
	 *
	 * @var float
	 */
	protected $latitude;

	/**
	 * Bild
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * Personen, auf die sich das Dokument bezieht
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Ddarchiv_Domain_Model_Person>
	 */
	protected $persons;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->persons = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the loc
	 *
	 * @return string $loc
	 */
	public function getLoc() {
		return $this->loc;
	}

	/**
	 * Sets the loc
	 *
	 * @param string $loc
	 * @return void
	 */
	public function setLoc($loc) {
		$this->loc = $loc;
	}

	/**
	 * Returns the docDate
	 *
	 * @return DateTime $docDate
	 */
	public function getDocDate() {
		return $this->docDate;
	}

	/**
	 * Sets the docDate
	 *
	 * @param DateTime $docDate
	 * @return void
	 */
	public function setDocDate($docDate) {
		$this->docDate = $docDate;
	}

	/**
	 * Returns the longitude
	 *
	 * @return float $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Sets the longitude
	 *
	 * @param float $longitude
	 * @return void
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * Returns the latitude
	 *
	 * @return float $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Sets the latitude
	 *
	 * @param float $latitude
	 * @return void
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Adds a Person
	 *
	 * @param Tx_Ddarchiv_Domain_Model_Person $person
	 * @return void
	 */
	public function addPerson(Tx_Ddarchiv_Domain_Model_Person $person) {
		$this->persons->attach($person);
	}

	/**
	 * Removes a Person
	 *
	 * @param Tx_Ddarchiv_Domain_Model_Person $personToRemove The Person to be removed
	 * @return void
	 */
	public function removePerson(Tx_Ddarchiv_Domain_Model_Person $personToRemove) {
		$this->persons->detach($personToRemove);
	}

	/**
	 * Returns the persons
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Ddarchiv_Domain_Model_Person> $persons
	 */
	public function getPersons() {
		return $this->persons;
	}

	/**
	 * Sets the persons
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Ddarchiv_Domain_Model_Person> $persons
	 * @return void
	 */
	public function setPersons(Tx_Extbase_Persistence_ObjectStorage $persons) {
		$this->persons = $persons;
	}

}
?>
