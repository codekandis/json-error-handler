<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use JsonException;
use function json_last_error;

/**
 * Represents a JSON error handler.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandler implements JsonErrorHandlerInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function handle(): void
	{
		$errorCode = json_last_error();
		if ( JsonErrorCodes::NONE !== $errorCode )
		{
			$errorMessage = ( new JsonErrorCodesTranslator() )
				->translate( $errorCode );
			throw new JsonException( $errorMessage, $errorCode );
		}
	}
}
