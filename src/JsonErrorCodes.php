<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use const JSON_ERROR_CTRL_CHAR;
use const JSON_ERROR_DEPTH;
use const JSON_ERROR_INF_OR_NAN;
use const JSON_ERROR_INVALID_PROPERTY_NAME;
use const JSON_ERROR_NONE;
use const JSON_ERROR_RECURSION;
use const JSON_ERROR_STATE_MISMATCH;
use const JSON_ERROR_SYNTAX;
use const JSON_ERROR_UNSUPPORTED_TYPE;
use const JSON_ERROR_UTF16;
use const JSON_ERROR_UTF8;

/**
 * Represents the available JSON error codes provided by `json_last_error()`.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JsonErrorCodes
{
	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-none
	 */
	public const NONE = JSON_ERROR_NONE;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-depth
	 */
	public const DEPTH = JSON_ERROR_DEPTH;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-state-mismatch
	 */
	public const STATE_MISMATCH = JSON_ERROR_STATE_MISMATCH;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-ctrl-char
	 */
	public const CTRL_CHAR = JSON_ERROR_CTRL_CHAR;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-syntax
	 */
	public const SYNTAX = JSON_ERROR_SYNTAX;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-utf8
	 */
	public const UTF8 = JSON_ERROR_UTF8;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-recursion
	 */
	public const RECURSION = JSON_ERROR_RECURSION;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-inf-or-nan
	 */
	public const INF_OR_NAN = JSON_ERROR_INF_OR_NAN;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-unsupported-type
	 */
	public const UNSUPPORTED_TYPE = JSON_ERROR_UNSUPPORTED_TYPE;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-invalid-property-name
	 */
	public const INVALID_PROPERTY_NAME = JSON_ERROR_INVALID_PROPERTY_NAME;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-utf16
	 */
	public const UTF16 = JSON_ERROR_UTF16;
}
