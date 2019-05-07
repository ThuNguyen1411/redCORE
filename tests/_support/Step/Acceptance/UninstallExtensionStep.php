<?php
/**
 * @package     RedCORE
 * @subpackage  Step
 * @copyright   Copyright (C) 2008 - 2019 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Step\Acceptance;

use WebDriverKeys;
use Page\UninstallExtensionPage as UninstallPage;

/**
 * Class UninstallExtensionStep
 * @package Step\Acceptance
 */
class UninstallExtensionStep extends \AcceptanceTester
{

	/**
	 * @throws \Exception
	 */
	public function UninstallExtensionStep()
	{
		$I = $this;
		$I->amOnPage(UninstallPage::$URL);
		$I->click(UninstallPage::$buttonSearch);
		$I->waitForElement(UninstallPage::$buttonSelectType, 30);
		$I->wait(0.5);
		$I->selectOptionInChosen(UninstallPage::$buttonSelectType, UninstallPage::$textType);
		$I->fillField(UninstallPage::$fieldSearch, UninstallPage::$textSearch);
		$I->pressKey(UninstallPage::$fieldSearch, WebDriverKeys::ENTER);
		$I->waitForElement(UninstallPage::$listManager);
		$I->click(UninstallPage::$checkBox);
		$I->click(UninstallPage::$buttonDelete);
		$I->acceptPopup();
		$I->waitForText(UninstallPage::$textSuccess, 60, UninstallPage::$message);
		$I->see(UninstallPage::$textSuccess, UninstallPage::$message);
		$I->fillField(UninstallPage::$fieldSearch, UninstallPage::$textSearch);
		$I->pressKey(UninstallPage::$fieldSearch, WebDriverKeys::ENTER);
		$I->waitForText(UninstallPage::$textNoExtensions, 60, UninstallPage::$noItems);
		$I->see(UninstallPage::$textNoExtensions, UninstallPage::$noItems);
		$I->selectOptionInChosen(UninstallPage::$buttonSelectType, UninstallPage::$selectType);
	}

}