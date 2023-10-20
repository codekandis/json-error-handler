<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use JsonException as JsonExceptionOrigin;

/**
 * Represents an exception if a JSON error occured.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonException extends JsonExceptionOrigin implements JsonExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public static function with_errorCodeAndErrorMessage( int $errorCode, string $errorMessage ): static
	{
		return new static( $errorMessage, $errorCode );
	}
}
