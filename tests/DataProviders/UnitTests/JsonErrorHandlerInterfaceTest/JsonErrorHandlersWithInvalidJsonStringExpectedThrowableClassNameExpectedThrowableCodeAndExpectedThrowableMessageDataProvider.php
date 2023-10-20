<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest;

use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use CodeKandis\JsonErrorHandler\JsonException;
use CodeKandis\JsonErrorHandler\Tests\Fixtures\InvalidValues;
use CodeKandis\PhpUnit\DataProviderInterface;

/**
 * Represents a data provider providing JSON error handlers with invalid JSON string, expected throwable class name, expected throwable code and expected throwable message.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlersWithInvalidJsonStringExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	public static function provideData(): iterable
	{
		return [
			0 => [
				'jsonErrorHandler'           => new JsonErrorHandler(),
				'invalidJsonString'          => InvalidValues::JSON_STRING,
				'expectedThrowableClassName' => JsonException::class,
				'expectedThrowableCode'      => JsonErrorCodes::SYNTAX,
				'expectedThrowableMessage'   => JsonErrorMessages::SYNTAX
			]
		];
	}
}
