<?php
namespace OCA\YtDownloader\Controller;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\AuthPublicShareController;

class PublicAPIController extends AuthPublicShareController {
	
	protected function getPasswordHash(): string {
			return md5('secretpassword');
	}

	public function isValidToken(): bool {
			return true;
	}

	protected function isPasswordProtected(): bool {
			return false;
	}

	protected function verifyPassword(string $password): bool {
		return false;
	}

	
	public function showShare($path = ''): TemplateResponse {
		
	}

	/**
	 * @PublicPage
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function test() {
		return new TemplateResponse('ytdownloader', 'test');  // templates/test.php
	}

}
