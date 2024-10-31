<?php
/**
 * PhotoShelter User DataSource.
 *
 * @package photoshelter-importer
 */

namespace PhotoShelter\Importer\API\User;

use PhotoShelter\Importer\API\RemoteSource;

/**
 * Class DataSource
 */
class DataSource extends RemoteSource {
	/**
	 * Retrieves the list and count of collections and galleries shared with the specified user or organization account.
	 *
	 * @see https://engineering.photoshelter.com/psapi-v4-doc/#operation/userInvites
	 *
	 * @return array|\WP_Error Array on success, \WP_Error on failure.
	 * @since 1.0.2
	 */
	public function get_invites() {
		return $this->api_request_get(
			'user/invites'
		);
	}

	/**
	 * Retrieves session information for the currently authenticated user.
	 *
	 * @see https://engineering.photoshelter.com/psapi-v4-doc/#operation/userSession
	 *
	 * @return array|\WP_Error Array on success, \WP_Error on failure.
	 * @since 1.0.2
	 */
	public function get_session() {
		return $this->api_request_get(
			'user/session'
		);
	}
}
