<?php

/**
 * Created by PhpStorm.
 * User: guillaumevandecasteele
 * Date: 30/05/2017
 * Time: 15:26
 */
class IntegrationConnector {

	private $baseUrl = "http://10.3.51.8:8280/services/hotel.HTTPEndpoint";
	private $insertContactPath = "/crm/contacts";
	private $insertEmailPath = "/crm/emails";
	private $insertEmailRelationPath = "/crm/contacts/email/assign";

	public function pushClientToCrm( $firstName, $lastName, $birthDate, $country, $state, $city, $postalCode, $street, $houseNumber, $phoneMobile, $phoneWork, $phoneHome, $phoneFax, $email, $createdOn ) {
		$clientId  = $this->create_guid();

		$insertContactUrl = $this->baseUrl . $this->insertContactPath;

		$contactFormData = array();

		$contactFormData["id"]        = $clientId;
		$contactFormData["createdOn"] = $createdOn;


		if ( isset( $firstName ) && ! empty( $firstName ) ) {
			$contactFormData["firstName"] = $firstName;
		}

		if ( isset( $lastName ) && ! empty( $lastName ) ) {
			$contactFormData["lastName"] = $lastName;
		}

		if ( isset( $birthDate ) ) {
			$contactFormData["birthDate"] = $birthDate;
		}

		if ( isset( $country ) && ! empty( $country ) ) {
			$contactFormData["country"] = $country;
		}

		if ( isset( $state ) && ! empty( $state ) ) {
			$contactFormData["state"] = $state;
		}

		if ( isset( $city ) && ! empty( $city ) ) {
			$contactFormData["city"] = $city;
		}

		if ( isset( $postalCode ) && ! empty( $postalCode ) ) {
			$contactFormData["postalCode"] = $postalCode;
		}

		if ( isset( $street ) && ! empty( $street ) ) {
			$address = $street;
			if ( isset( $houseNumber ) && ! empty( $houseNumber ) ) {
				$address = $address . " " . $houseNumber;
			}
			$contactFormData["street"] = $address;
		}

		if ( isset( $phoneMobile ) && ! empty( $phoneMobile ) ) {
			$contactFormData["phoneMobile"] = $phoneMobile;
		}

		if ( isset( $phoneWork ) && ! empty( $phoneWork ) ) {
			$contactFormData["phoneWork"] = $phoneWork;
		}

		if ( isset( $phoneHome ) && ! empty( $phoneHome ) ) {
			$contactFormData["phoneHome"] = $phoneHome;
		}

		if ( isset( $phoneFax ) && ! empty( $phoneFax ) ) {
			$contactFormData["phoneFax"] = $phoneFax;
		}

		$contactInsertion = curl_init();
		curl_setopt( $contactInsertion, CURLOPT_URL, $insertContactUrl );
		curl_setopt( $contactInsertion, CURLOPT_POST, 1 );
		curl_setopt( $contactInsertion, CURLOPT_POSTFIELDS, $contactFormData );

		$contactResult = curl_exec( $contactInsertion );

		if ( isset( $contactResult ) && isset( $email ) && ! empty( $email ) ) {
			$emailId = $this->create_guid();

			$insertMailUrl = $this->baseUrl . $this->insertEmailPath;

			$emailFormData = array();

			$emailFormData["id"]        = $emailId;
			$emailFormData["email"]     = $email;
			$emailFormData["emailCaps"] = strtoupper( $email );
			$emailFormData["createdOn"] = $createdOn;

			$emailInsertion = curl_init();
			curl_setopt( $emailInsertion, CURLOPT_URL, $insertMailUrl );
			curl_setopt( $emailInsertion, CURLOPT_POST, 1 );
			curl_setopt( $emailInsertion, CURLOPT_POSTFIELDS, $emailFormData );

			$emailResult = curl_exec( $emailInsertion );

			if ( isset( $emailResult ) ) {
				$emailRelationId = $this->create_guid();

				$insertMailRelationUrl = $this->baseUrl . $this->insertEmailRelationPath;

				$relFormData = array();

				$relFormData["id"]        = $emailRelationId;
				$relFormData["emailId"]   = $emailId;
				$relFormData["clientId"]  = $clientId;
				$relFormData["createdOn"] = $createdOn;

				$relInsertion = curl_init();
				curl_setopt( $relInsertion, CURLOPT_URL, $insertMailRelationUrl );
				curl_setopt( $relInsertion, CURLOPT_POST, 1 );
				curl_setopt( $relInsertion, CURLOPT_POSTFIELDS, $relFormData );

				curl_exec( $relInsertion );
			}
		}
	}

	/**
	 * SWITCH2IT: We've copied this function to create GUIDs for the integration
	 *
	 * A temporary method of generating GUIDs of the correct format for our DB.
	 *
	 * @return string contianing a GUID in the format: aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee
	 *
	 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
	 * All Rights Reserved.
	 * Contributor(s): ______________________________________..
	 */
	private function create_guid() {
		$microTime = microtime();
		list( $a_dec, $a_sec ) = explode( ' ', $microTime );

		$dec_hex = dechex( $a_dec * 1000000 );
		$sec_hex = dechex( $a_sec );

		$this->ensure_length( $dec_hex, 5 );
		$this->ensure_length( $sec_hex, 6 );

		$guid = '';
		$guid .= $dec_hex;
		$guid .= $this->create_guid_section( 3 );
		$guid .= '-';
		$guid .= $this->create_guid_section( 4 );
		$guid .= '-';
		$guid .= $this->create_guid_section( 4 );
		$guid .= '-';
		$guid .= $this->create_guid_section( 4 );
		$guid .= '-';
		$guid .= $sec_hex;
		$guid .= $this->create_guid_section( 6 );

		return $guid;
	}

	private function ensure_length( &$string, $length ) {
		$strlen = strlen( $string );
		if ( $strlen < $length ) {
			$string = str_pad( $string, $length, '0' );
		} elseif ( $strlen > $length ) {
			$string = substr( $string, 0, $length );
		}
	}

	private function create_guid_section( $characters ) {
		$return = '';
		for ( $i = 0; $i < $characters; ++ $i ) {
			$return .= dechex( mt_rand( 0, 15 ) );
		}

		return $return;
	}

}
