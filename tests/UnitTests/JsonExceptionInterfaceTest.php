<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\UnitTests;

use CodeKandis\JsonErrorHandler\JsonExceptionInterface;
use CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonExceptionInterfaceTest\ThrowableClassNamesWithErrorCodeErrorMessageExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\JsonErrorHandler\JsonExceptionInterface`.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonExceptionInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `JsonExceptionInterface::with_errorCodeAndErrorMessage()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $errorCode The error code to pass.
	 * @param string $errorMessage The error message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithErrorCodeErrorMessageExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithErrorCodeAndErrorMessageInstantiatesThrowableCorrectly( string $throwableClassName, int $errorCode, string $errorMessage, string $expectedThrowableClassName, int $expectedThrowableCode, string $expectedThrowableMessage ): void
	{
		$resultedThrowable          = $throwableClassName::{'with_errorCodeAndErrorMessage'}( $errorCode, $errorMessage );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( JsonExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
