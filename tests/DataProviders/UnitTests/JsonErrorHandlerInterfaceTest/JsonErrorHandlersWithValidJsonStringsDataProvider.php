<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorHandlerInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonErrorHandler\JsonErrorHandler;

/**
 * Represents a data provider providing JSON error handlers with valid JSON strings.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorHandlersWithValidJsonStringsDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonErrorHandler' => new JsonErrorHandler(),
					'validJsonString'  => '{"foobar":"barfoo"}'
				],
				1 => [
					'jsonErrorHandler' => new JsonErrorHandler(),
					'validJsonString'  => '["foobar","barfoo"]'
				]
			]
		);
	}
}
