<?php
/**
 * @package     RedCORE
 * @subpackage  Page
 * @copyright   Copyright (C) 2008 - 2019 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace Page;

/**
 * Class AbstractPage
 * @package Page
 */
class AbstractPage
{

		/**
		 * @var string
		 */
		public static $buttonSearch                 = "//button[@class='btn hasTooltip js-stools-btn-filter']";

		/**
		 * @var string
		 */
		public static $buttonSelectType             = "#filter_type";

		/**
		 * @var string
		 */
		public static $fieldSearch                  = '#filter_search';

		/**
		 * @var string
		 */
		public static $buttonDelete                 = '#toolbar-delete';

		/**
		 * @var string
		 */
		public static $message                      = '#system-message-container';

		/**
		 * @var string
		 */
		public static $listManager                  = '#manageList';

		/**
		 * @var string
		 */
		public static $checkBox                     = '#cb0';
}
