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
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-none
	 * @var int
	 */
	final public const int NONE = JSON_ERROR_NONE;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-ctrl-char
	 * @var int
	 */
	final public const int CTRL_CHAR = JSON_ERROR_CTRL_CHAR;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-depth
	 * @var int
	 */
	final public const int DEPTH = JSON_ERROR_DEPTH;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-inf-or-nan
	 * @var int
	 */
	final public const int INF_OR_NAN = JSON_ERROR_INF_OR_NAN;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-invalid-property-name
	 * @var int
	 */
	final public const int INVALID_PROPERTY_NAME = JSON_ERROR_INVALID_PROPERTY_NAME;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-recursion
	 * @var int
	 */
	final public const int RECURSION = JSON_ERROR_RECURSION;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-state-mismatch
	 * @var int
	 */
	final public const int STATE_MISMATCH = JSON_ERROR_STATE_MISMATCH;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-syntax
	 * @var int
	 */
	final public const int SYNTAX = JSON_ERROR_SYNTAX;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-unsupported-type
	 * @var int
	 */
	final public const int UNSUPPORTED_TYPE = JSON_ERROR_UNSUPPORTED_TYPE;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-utf16
	 * @var int
	 */
	final public const int UTF16 = JSON_ERROR_UTF16;

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-utf8
	 * @var int
	 */
	final public const int UTF8 = JSON_ERROR_UTF8;
}
