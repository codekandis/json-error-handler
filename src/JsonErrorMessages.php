<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use CodeKandis\Types\BaseObject;

/**
 * Represents the available JSON error messages provided by `json_last_error_msg()`.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JsonErrorMessages extends BaseObject
{
	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-none
	 * @var string
	 */
	final public const string NONE = 'No error has occurred';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-ctrl-char
	 * @var string
	 */
	final public const string CTRL_CHAR = 'Control character error, possibly incorrectly encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-depth
	 * @var string
	 */
	final public const string DEPTH = 'The maximum stack depth has been exceeded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-inf-or-nan
	 * @var string
	 */
	final public const string INF_OR_NAN = 'One or more NAN or INF values in the value to be encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-invalid-property-name
	 * @var string
	 */
	final public const string INVALID_PROPERTY_NAME = 'A property name that cannot be encoded was given';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-recursion
	 * @var string
	 */
	final public const string RECURSION = 'One or more recursive references in the value to be encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-state-mismatch
	 * @var string
	 */
	final public const string STATE_MISMATCH = 'Invalid or malformed JSON';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-syntax
	 * @var string
	 */
	final public const string SYNTAX = 'Syntax error';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-unsupported-type
	 * @var string
	 */
	final public const string UNSUPPORTED_TYPE = 'A value of a type that cannot be encoded was given';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-utf16
	 * @var string
	 */
	final public const string UTF16 = 'Malformed UTF-16 characters, possibly incorrectly encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-error-utf8
	 * @var string
	 */
	final public const string UTF8 = 'Malformed UTF-8 characters, possibly incorrectly encoded';
}
