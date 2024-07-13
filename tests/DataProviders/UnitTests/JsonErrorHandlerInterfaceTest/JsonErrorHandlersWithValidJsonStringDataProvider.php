<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest;

use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use CodeKandis\JsonErrorHandler\Tests\Fixtures\ValidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;

/**
 * Represents a data provider providing JSON error handlers with valid JSON string.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlersWithValidJsonStringDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	public static function provideData(): iterable
	{
		return [
			0 => [
				'jsonErrorHandler' => new JsonErrorHandler(),
				'validJsonString'  => ValidValuesFixture::JSON_STRING
			]
		];
	}
}
