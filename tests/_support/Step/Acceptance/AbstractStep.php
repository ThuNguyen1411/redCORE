<?php
/**
 * @package     RedCORE
 * @subpackage  Step
 * @copyright   Copyright (C) 2008 - 2019 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Step\Acceptance;

use Page\UninstallExtensionPage as uninstallPage;
use WebDriverKeys;

/**
 * Class AbstractStep
 * @package Step\Acceptance
 */
class AbstractStep extends \AcceptanceTester
{
	/**
	 * @throws \Exception
	 */
	public function uninstallExtensionStep()
	{
		$I = $this;
		$I->amOnPage(uninstallPage::$URL);
		$I->click(uninstallPage::$buttonSearch);
		$I->waitForElement(uninstallPage::$buttonSelectType, 30);
		$I->wait(0.5);
		$I->selectOptionInChosen(uninstallPage::$buttonSelectType, uninstallPage::$textType);
		$I->fillField(uninstallPage::$fieldSearch, uninstallPage::$textSearch);
		$I->pressKey(uninstallPage::$fieldSearch, WebDriverKeys::ENTER);
		$I->waitForElement(uninstallPage::$listManager);
		$I->click(uninstallPage::$checkBox);
		$I->click(uninstallPage::$buttonDelete);
		$I->acceptPopup();
		$I->waitForText(uninstallPage::$textSuccess, 60, uninstallPage::$message);
		$I->see(uninstallPage::$textSuccess, uninstallPage::$message);
		$I->fillField(uninstallPage::$fieldSearch, uninstallPage::$textSearch);
		$I->pressKey(uninstallPage::$fieldSearch, WebDriverKeys::ENTER);
		$I->waitForText(uninstallPage::$textNoExtensions, 60, uninstallPage::$noItems);
		$I->see(uninstallPage::$textNoExtensions, uninstallPage::$noItems);
		$I->selectOptionInChosen(uninstallPage::$buttonSelectType, uninstallPage::$selectType);
	}
}