<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use JsonException as OriginJsonException;
use Override;

/**
 * Represents an exception if a JSON error occured.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonException extends OriginJsonException implements JsonExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_errorCodeAndErrorMessage( int $errorCode, string $errorMessage ): static
	{
		return new static( $errorMessage, $errorCode );
	}
}
