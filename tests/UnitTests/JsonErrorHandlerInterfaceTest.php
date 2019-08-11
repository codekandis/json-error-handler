<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\UnitTests;

use CodeKandis\JsonErrorHandler\JsonErrorHandlerInterface;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\JsonErrorHandlerInterfaceTest\JsonErrorHandlersWithInvalidValuesAndErrorCodesDataProvider;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\JsonErrorHandlerInterfaceTest\JsonErrorHandlersWithValidValuesDataProvider;
use Iterator;
use PHPUnit\Framework\TestCase;
use function json_decode;

/**
 * Represents the test case to test objects against the `JsonErrorHandlerInterface`.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlerInterfaceTest extends TestCase
{
	/**
	 * Provides instantiated JSON error handlers with valid JSON strings.
	 * @return Iterator The instantiated JSON error handlers with valid JSON strings.
	 */
	public function jsonErrorHandlersWithValidValuesDataProvider(): Iterator
	{
		return new JsonErrorHandlersWithValidValuesDataProvider();
	}

	/**
	 * Tests if `JsonErrorHandlerInterface::handle()` executes and returns void.
	 * @param JsonErrorHandlerInterface $jsonErrorHandler The JSON error handler to test.
	 * @param string $validValue The valid JSON string to decode.
	 * @dataProvider jsonErrorHandlersWithValidValuesDataProvider
	 */
	public function testIfMethodHandleExecutesAndReturnsVoid( JsonErrorHandlerInterface $jsonErrorHandler, string $validValue ): void
	{
		json_decode( $validValue );
		$resultedReturnValue = $jsonErrorHandler->handle();

		static::assertNull( $resultedReturnValue );
	}

	/**
	 * Provides instantiated JSON error handlers with invalid JSON strings, expected exceptions, expected error codes and expected exception messages.
	 * @return Iterator The instantiated JSON error handlers with invalid JSON strings, expected exceptions, expected error codes and expected exception messages.
	 */
	public function jsonErrorHandlersWithInvalidValuesAndErrorCodesDataProvider(): Iterator
	{
		return new JsonErrorHandlersWithInvalidValuesAndErrorCodesDataProvider();
	}

	/**
	 * Tests if `JsonErrorHandler::handle()` throws an exception while an JSON error occurred.
	 * @param JsonErrorHandlerInterface $jsonErrorHandler The JSON error handler to test.
	 * @param string $invalidValue The invalid JSON string.
	 * @param string $expectedExceptionClassName The class name of the expected exception.
	 * @param int $expectedExceptionCode The error code of the expected exception.
	 * @param string $expectedExceptionMessage The error message of the expected exception.
	 * @dataProvider jsonErrorHandlersWithInvalidValuesAndErrorCodesDataProvider
	 */
	public function testIfMethodHandleThrowsExceptionOnJsonError(
		JsonErrorHandlerInterface $jsonErrorHandler,
		string $invalidValue,
		string $expectedExceptionClass,
		int $expectedExceptionCode,
		string $expectedExceptionMessage
	): void
	{
		$this->expectException( $expectedExceptionClass );
		$this->expectExceptionCode( $expectedExceptionCode );
		$this->expectExceptionMessage( $expectedExceptionMessage );

		json_decode( $invalidValue );
		$jsonErrorHandler->handle();
	}
}
