<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

/**
 * Represents the interface of any exception if a JSON error occured.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonExceptionInterface
{
	/**
	 * Static constructor method.
	 * @param int $errorCode The error code of the JSON error.
	 * @param string $errorMessage The error message of the JSON error.
	 * @return static
	 */
	public static function with_errorCodeAndErrorMessage( int $errorCode, string $errorMessage ): static;
}
