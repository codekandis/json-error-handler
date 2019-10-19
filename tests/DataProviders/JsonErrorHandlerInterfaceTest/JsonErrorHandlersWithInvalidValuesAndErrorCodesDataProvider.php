<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\JsonErrorHandlerInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use JsonException;

/**
 * Represents a data provider providing instantiated JSON error handlers with invalid JSON strings, expected exceptions, expected error codes and expected exception messages.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlersWithInvalidValuesAndErrorCodesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonErrorHandler'         => new JsonErrorHandler(),
					'invalidValue'             => '{"foobar":}',
					'expectedExceptionClass'   => JsonException::class,
					'expectedExceptionCode'    => JsonErrorCodes::SYNTAX,
					'expectedExceptionMessage' => JsonErrorMessages::SYNTAX
				]
			]
		);
	}
}
