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
class Tx_Ddarchiv_Domain_Model_Bestand extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Name des Bestandes
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Beschreibung
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * Herkunft
	 *
	 * @var string
	 */
	protected $provenience;

	/**
	 * von (Jahr)
	 *
	 * @var string
	 */
	protected $yearFrom;

	/**
	 * bis (Jahr)
	 *
	 * @var string
	 */
	protected $yearTo;

	/**
	 * Standort (Karton, Mappe)
	 *
	 * @var string
	 */
	protected $loc;

	/**
	 * geographische Länge
	 *
	 * @var float
	 */
	protected $longitude;

	/**
	 * georgraphische Breite
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
	 * Dokumente im Bestand
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Ddarchiv_Domain_Model_Document>
	 */
	protected $documents;

	/**
	 * Personen, auf die sich der Bestand bezieht
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
		$this->documents = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->persons = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Returns the provenience
	 *
	 * @return string $provenience
	 */
	public function getProvenience() {
		return $this->provenience;
	}

	/**
	 * Sets the provenience
	 *
	 * @param string $provenience
	 * @return void
	 */
	public function setProvenience($provenience) {
		$this->provenience = $provenience;
	}

	/**
	 * Returns the yearFrom
	 *
	 * @return DateTime $yearFrom
	 */
	public function getYearFrom() {
		return $this->yearFrom;
	}

	/**
	 * Sets the yearFrom
	 *
	 * @param DateTime $yearFrom
	 * @return void
	 */
	public function setYearFrom($yearFrom) {
		$this->yearFrom = $yearFrom;
	}

	/**
	 * Returns the yearTo
	 *
	 * @return DateTime $yearTo
	 */
	public function getYearTo() {
		return $this->yearTo;
	}

	/**
	 * Sets the yearTo
	 *
	 * @param DateTime $yearTo
	 * @return void
	 */
	public function setYearTo($yearTo) {
		$this->yearTo = $yearTo;
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
	 * Adds a Document
	 *
	 * @param Tx_Ddarchiv_Domain_Model_Document $document
	 * @return void
	 */
	public function addDocument(Tx_Ddarchiv_Domain_Model_Document $document) {
		$this->documents->attach($document);
	}

	/**
	 * Removes a Document
	 *
	 * @param Tx_Ddarchiv_Domain_Model_Document $documentToRemove The Document to be removed
	 * @return void
	 */
	public function removeDocument(Tx_Ddarchiv_Domain_Model_Document $documentToRemove) {
		$this->documents->detach($documentToRemove);
	}

	/**
	 * Returns the documents
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Ddarchiv_Domain_Model_Document> $documents
	 */
	public function getDocuments() {
		return $this->documents;
	}

	/**
	 * Sets the documents
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Ddarchiv_Domain_Model_Document> $documents
	 * @return void
	 */
	public function setDocuments(Tx_Extbase_Persistence_ObjectStorage $documents) {
		$this->documents = $documents;
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
