<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

/**
 * Represents the available JSON error messages provided by `json_last_error_msg()`.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JsonErrorMessages
{
	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const NONE = 'No error has occurred';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const DEPTH = 'The maximum stack depth has been exceeded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const STATE_MISMATCH = 'Invalid or malformed JSON';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const CTRL_CHAR = 'Control character error, possibly incorrectly encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const SYNTAX = 'Syntax error';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const UTF8 = 'Malformed UTF-8 characters, possibly incorrectly encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const RECURSION = 'One or more recursive references in the value to be encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const INF_OR_NAN = 'One or more NAN or INF values in the value to be encoded';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const UNSUPPORTED_TYPE = 'A value of a type that cannot be encoded was given';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const INVALID_PROPERTY_NAME = 'A property name that cannot be encoded was given';

	/**
	 * @see https://www.php.net/manual/en/function.json-last-error.php#refsect1-function.json-last-error-returnvalues
	 */
	public const UTF16 = 'Malformed UTF-16 characters, possibly incorrectly encoded';
}
