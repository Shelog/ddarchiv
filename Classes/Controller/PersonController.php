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
 * @package ddarchiv
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Ddarchiv_Controller_PersonController extends Tx_Extbase_MVC_Controller_ActionController {

 /**
  * @var Tx_Ddarchiv_Domain_Model_PersonRepository
  * 
  */
 protected $personRepository;    

  
 /**
  * Initialisierung der aktuellen Aktion
  * 
  * @return void
  *
  */
 public function initializeAction() {
 
   $this->personRepository = t3lib_div::makeInstance('Tx_Ddarchiv_Domain_Repository_PersonRepository');
 
 }   
 
 
  /**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$persons = $this->personRepository->findAll();
		$this->view->assign('persons', $persons);
	}


 /**
  * @param Tx_Ddarchiv_Domain_Model_Bestand $bestand
  * @param Tx_Ddarchiv_Domain_Model_Person $newPerson
  * @return string
  * @dontvalidate $newPerson
  */
  public function addAction(Tx_Ddarchiv_Domain_Model_Bestand $bestand, Tx_Ddarchiv_Domain_Model_Person $newPerson = NULL) {
       $this->view->assign('persons', $this->personRepository->findAll());
       $this->view->assign('bestand', $bestand);
       $this->view->assign('newPerson', $newPerson);
  }
  
  
  /**
	 * action show
	 * 
	 * @param mixed Tx_Ddarchiv_Domain_Model_Person $person  
	 * 
	 * @return void
	 * @dontvalidate $variable
    * @dontverifyrequesthash
	 */
	public function showAction(Tx_Ddarchiv_Domain_Model_Person $person) {
	
    $this->view->assign('person', $person);
	}

    
  /**
   * @param Tx_Ddarchiv_Domain_Model_Bestand $bestand
   * @param Tx_Ddarchiv_Domain_Model_Person $newPerson
   * @return void
   * @dontvalidate $newPerson
   */           
   public function createAction(Tx_Ddarchiv_Domain_Model_Bestand $bestand, Tx_Ddarchiv_Domain_Model_Person $newPerson) {
     
       $bestand->addPerson($newPerson);
       $this->redirect('list', 'Bestand', NULL, array('bestand' => $bestand));
     
   } 
   
   
  /**
	 * action edit
	 *
	 * @param $document
	 * @return void
	 */
	public function editAction(Tx_Ddarchiv_Domain_Model_Person $person) {
		$this->view->assign('person', $person);
	}

	/**
	 * action update
	 * @param Tx_Ddarchiv_Domain_Model_Bestand $bestand
	 * @param Tx_Ddarchiv_Domain_Model_Person $person
	 * @return void
	 */
	public function updateAction(Tx_Ddarchiv_Domain_Model_Person $person) {
    
		$this->personRepository->update($person);
		$this->flashMessageContainer->add('Die Personen-Datei wurde bearbeitet.');
    $this->redirect('list', 'Bestand', NULL, array('bestand' => $bestand));
  }
  

	/**
	 * action delete
	 * @param Tx_Ddarchiv_Domain_Model_Bestand $bestand
	 * @param Tx_Ddarchiv_Domain_Model_Person $person
	 * @dontvalidate $Document
	 * @return void
   */	 
	public function deleteAction(Tx_Ddarchiv_Domain_Model_Bestand $bestand, Tx_Ddarchiv_Domain_Model_Person $person) {
    
		$bestand->removePerson($person);
		$this->redirect('list', 'Bestand', NULL, array('bestand' => $bestand));
	}
  

 }  

?>
