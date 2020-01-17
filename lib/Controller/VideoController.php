<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\FirstRunWizard\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\StreamResponse;

class VideoController extends Controller {

	/**
	 * @NoAdminRequired
	 */
	public function webM() {
		$file = fopen(__DIR__ . '/../../img/Nextcloud.webm', 'r+');
		$resp = new StreamResponse($file);

		$resp->addHeader('Content-Type', 'video/webm');
		return $resp;
	}

	/**
	 * @NoAdminRequired
	 */
	public function mp4() {
		$file = fopen(__DIR__ . '/../../img/Nextcloud.mp4', 'r+');
		$resp = new StreamResponse($file);

		$resp->addHeader('Content-Type', 'video/mp4');
		return $resp;
	}
}
