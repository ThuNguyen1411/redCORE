<?php
/**
 * @package     RedCORE
 * @subpackage  Cept
 * @copyright   Copyright (C) 2008 - 2019 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

use Step\Acceptance\UninstallExtensionStep as UnistallStep;
/**
 * Class UninstallExtensionCest
 *
 * @package  AcceptanceTester
 *
 */
class UninstallExtensionCest
{

	/**
	 * @param UnistallStep $I
	 * @throws Exception
	 */
	public function uninstallExtension(UnistallStep $I)
	{
		$I->wantTo('Uninstall redCORE Extensions');
		$I->doAdministratorLogin();
		$I->UninstallExtensionStep();
	}
}
