<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\UnitTests;

use CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorCodesTranslatorTest\JsonErrorCodesTranslatorClassNamesDataProvider;
use CodeKandis\PhpUnit\TestCase;
use Iterator;

class JsonErrorCodesTranslatorTest extends TestCase
{
	/**
	 * Provides JSON error codes translators class names with expected JSON error codes translators class names.
	 * @return Iterator JSON error codes translators class names with expected JSON error codes translators class names.
	 */
	public function jsonErrorCodesTranslatorClassNamesDataProvider(): Iterator
	{
		return new JsonErrorCodesTranslatorClassNamesDataProvider();
	}

	/**
	 * Tests if the instantiation of the JSON error codes translator passes.
	 * @param string $jsonErrorCodesTranslatorClassName The class name of the JSON decoder error codes translator to instantiate.
	 * @param string $expectedJsonErrorCodesTranslatorClassName The expected class name the JSON decoder error codes translator is an instance of.
	 * @dataProvider jsonErrorCodesTranslatorClassNamesDataProvider
	 */
	public function testIfInstantiationReturnsCorrectly( string $jsonErrorCodesTranslatorClassName, string $expectedJsonErrorCodesTranslatorClassName ): void
	{
		$jsonErrorCodesTranslator = new $jsonErrorCodesTranslatorClassName();

		static::assertInstanceOf( $expectedJsonErrorCodesTranslatorClassName, $jsonErrorCodesTranslator );
	}
}
