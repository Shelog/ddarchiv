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
class Tx_Ddarchiv_Controller_BestandController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * bestandRepository
	 *
	 * @var Tx_Ddarchiv_Domain_Repository_BestandRepository
	 */
	protected $bestandRepository;

	/**
	 * injectBestandRepository
	 *
	 * @param Tx_Ddarchiv_Domain_Repository_BestandRepository $bestandRepository
	 * @return void
	 */
	public function injectBestandRepository(Tx_Ddarchiv_Domain_Repository_BestandRepository $bestandRepository) {
		$this->bestandRepository = $bestandRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$bestands = $this->bestandRepository->findAll();
		$this->view->assign('bestands', $bestands);
	}

	/**
	 * action show
	 *
	 * @param $bestand
	 * @return void
	 */
	public function showAction(Tx_Ddarchiv_Domain_Model_Bestand $bestand) {
		$this->view->assign('bestand', $bestand);
	}

}
?>
