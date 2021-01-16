<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\UnitTests;

use CodeKandis\JsonErrorHandler\JsonErrorHandlerInterface;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest\JsonErrorHandlersWithInvalidValuesAndExpectedExceptionClassNamesExceptionCodesAndExceptionMessagesDataProvider;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest\JsonErrorHandlersWithValidJsonStringsDataProvider;
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
	 * Provides JSON error handlers with valid JSON strings.
	 * @return Iterator JSON error handlers with valid JSON strings.
	 */
	public function jsonErrorHandlersWithValidJsonStringsDataProvider(): Iterator
	{
		return new JsonErrorHandlersWithValidJsonStringsDataProvider();
	}

	/**
	 * Tests if `JsonErrorHandlerInterface::handle()` executes and returns void.
	 * @param JsonErrorHandlerInterface $jsonErrorHandler The JSON error handler to test.
	 * @param string $validJsonString The valid JSON string to decode.
	 * @dataProvider jsonErrorHandlersWithValidJsonStringsDataProvider
	 */
	public function testIfMethodHandleExecutesAndReturnsVoid( JsonErrorHandlerInterface $jsonErrorHandler, string $validJsonString ): void
	{
		json_decode( $validJsonString );
		$resultedReturnValue = $jsonErrorHandler->handle();

		static::assertNull( $resultedReturnValue );
	}

	/**
	 * Provides JSON error handlers with invalid values, expected exceptions, exception codes and exception messages.
	 * @return Iterator JSON error handlers with invalid values, expected exceptions, exception codes and exception messages.
	 */
	public function jsonErrorHandlersWithInvalidValuesAndExpectedExceptionClassNamesExceptionCodesAndExceptionMessagesDataProvider(): Iterator
	{
		return new JsonErrorHandlersWithInvalidValuesAndExpectedExceptionClassNamesExceptionCodesAndExceptionMessagesDataProvider();
	}

	/**
	 * Tests if `JsonErrorHandler::handle()` throws an exception while an JSON error occurred.
	 * @param JsonErrorHandlerInterface $jsonErrorHandler The JSON error handler to test.
	 * @param string $invalidValue The invalid value to decode.
	 * @param string $expectedExceptionClassName The class name of the expected exception.
	 * @param int $expectedExceptionCode The exception code of the expected exception.
	 * @param string $expectedExceptionMessage The exception message of the expected exception.
	 * @dataProvider jsonErrorHandlersWithInvalidValuesAndExpectedExceptionClassNamesExceptionCodesAndExceptionMessagesDataProvider
	 */
	public function testIfMethodHandleThrowsExceptionOnJsonError( JsonErrorHandlerInterface $jsonErrorHandler, string $invalidValue, string $expectedExceptionClassName, int $expectedExceptionCode, string $expectedExceptionMessage ): void
	{
		$this->expectException( $expectedExceptionClassName );
		$this->expectExceptionCode( $expectedExceptionCode );
		$this->expectExceptionMessage( $expectedExceptionMessage );

		json_decode( $invalidValue );
		$jsonErrorHandler->handle();
	}
}
