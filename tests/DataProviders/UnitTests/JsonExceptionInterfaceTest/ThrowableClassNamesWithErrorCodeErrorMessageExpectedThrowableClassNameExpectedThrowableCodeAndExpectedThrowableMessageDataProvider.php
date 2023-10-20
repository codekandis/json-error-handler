<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonExceptionInterfaceTest;

use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use CodeKandis\JsonErrorHandler\JsonException;
use CodeKandis\PhpUnit\DataProviderInterface;

/**
 * Represents a data provider providing throwable class names with error code, error message, expected throwable class name, expected throwable code and expected throwable message.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithErrorCodeErrorMessageExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => JsonException::class,
				'errorCode'                  => $errorCode = JsonErrorCodes::CTRL_CHAR,
				'errorMessage'               => $errorMessage = JsonErrorMessages::CTRL_CHAR,
				'expectedThrowableClassName' => JsonException::class,
				'expectedThrowableCode'      => $errorCode,
				'expectedThrowableMessage'   => $errorMessage
			],
			1 => [
				'throwableClassName'         => JsonException::class,
				'errorCode'                  => $errorCode = JsonErrorCodes::DEPTH,
				'errorMessage'               => $errorMessage = JsonErrorMessages::DEPTH,
				'expectedThrowableClassName' => JsonException::class,
				'expectedThrowableCode'      => $errorCode,
				'expectedThrowableMessage'   => $errorMessage
			]
		];
	}
}
