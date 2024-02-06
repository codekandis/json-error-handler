<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use Override;
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
	#[Override]
	public function handle(): void
	{
		$errorCode = json_last_error();
		if ( JsonErrorCodes::NONE !== $errorCode )
		{
			$errorMessage = ( new JsonErrorCodesTranslator() )
				->translate( $errorCode );

			throw JsonException::with_errorCodeAndErrorMessage( $errorCode, $errorMessage );
		}
	}
}
