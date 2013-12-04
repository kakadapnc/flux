<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Claus Due <claus@wildside.dk>
 *
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
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * @author Claus Due <claus@wildside.dk>
 * @package Flux
 */
class Tx_Flux_UserFunction_HtmlOutputTest extends Tx_Flux_UserFunction_AbstractUserFunctionTest {

	/**
	 * @var array
	 */
	protected $parameters = array(
		'parameters' => array()
	);

	/**
	 * @return t3lib_TCEforms
	 */
	protected function getCallerInstance() {
		return $this->objectManager->get('t3lib_TCEforms');
	}

	/**
	 * @return array
	 */
	protected function getParameters() {
		$self = $this;
		$parameters = $this->parameters;
		$parameters['parameters']['closure'] = function($params) use ($self) {
			return 'I am a closure: ' . var_export($params, TRUE);
		};
		return $parameters;
	}

}