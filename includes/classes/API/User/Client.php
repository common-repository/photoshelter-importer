<?php
/**
 * PhotoShelter User Client.
 *
 * @package photoshelter-importer
 */

namespace PhotoShelter\Importer\API\User;

use PhotoShelter\Importer\API\ClientRemote;

/**
 * Class Client
 */
class Client extends ClientRemote {
	/**
	 * Get User Invites object.
	 *
	 * @return array|mixed|\WP_Error
	 * @since 1.0.2
	 */
	public function get_invites() {
		$response = $this->get_data_source()->get_invites();

		return $this->handle_response( $response );
	}

	/**
	 * Get Session object.
	 *
	 * @return array|mixed|\WP_Error
	 * @since 1.0.2
	 */
	public function get_session() {
		$response = $this->get_data_source()->get_session();

		return $this->handle_response( $response );
	}
}
