<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use JsonException;

/**
 * Represents a data provider providing JSON error handlers with invalid values, expected exceptions, exception codes and exception messages.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlersWithInvalidValuesAndExpectedExceptionClassNamesExceptionCodesAndExceptionMessagesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonErrorHandler'           => new JsonErrorHandler(),
					'invalidValue'               => '{"foobar":}',
					'expectedExceptionClassName' => JsonException::class,
					'expectedExceptionCode'      => JsonErrorCodes::SYNTAX,
					'expectedExceptionMessage'   => JsonErrorMessages::SYNTAX
				]
			]
		);
	}
}
