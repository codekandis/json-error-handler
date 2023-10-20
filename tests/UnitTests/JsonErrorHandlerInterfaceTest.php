<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\UnitTests;

use CodeKandis\JsonErrorHandler\JsonErrorHandlerInterface;
use CodeKandis\JsonErrorHandler\JsonExceptionInterface;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest\JsonErrorHandlersWithInvalidJsonStringExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest\JsonErrorHandlersWithValidJsonStringDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;
use Throwable;
use function json_decode;

/**
 * Represents the test case of `CodeKandis\JsonErrorHandler\JsonErrorHandlerInterface`.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlerInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `JsonErrorHandlerInterface::handle()` throws an `CodeKandis\JsonErrorHandler\JsonExceptionInterface` if an JSON error occurres.
	 * @param JsonErrorHandlerInterface $jsonErrorHandler The JSON error handler to test.
	 * @param string $invalidJsonString The invalid JSON string to decode.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( JsonErrorHandlersWithInvalidJsonStringExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodHandleThrowsJsonExceptionInterfaceOnJsonError( JsonErrorHandlerInterface $jsonErrorHandler, string $invalidJsonString, string $expectedThrowableClassName, int $expectedThrowableCode, string $expectedThrowableMessage ): void
	{
		try
		{
			json_decode( $invalidJsonString );
			$jsonErrorHandler->handle();
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( JsonExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableCode,
				$throwable->getCode()
			);
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `JsonErrorHandlerInterface::handle()` returns void on no JSON error.
	 * @param JsonErrorHandlerInterface $jsonErrorHandler The JSON error handler to test.
	 * @param string $validJsonString The valid JSON string to pass.
	 */
	#[DataProviderExternal( JsonErrorHandlersWithValidJsonStringDataProvider::class, 'provideData' )]
	#[DoesNotPerformAssertions]
	public function testsIfMethodHandleReturnsVoidOnNoJsonError( JsonErrorHandlerInterface $jsonErrorHandler, string $validJsonString ): void
	{
		json_decode( $validJsonString );
		$this->expectNotToPerformAssertions();
		$jsonErrorHandler->handle();
	}
}
