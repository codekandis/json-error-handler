<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\Fixtures;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValuesFixture
{
	/**
	 * Represents a valid JSON string.
	 */
	public const string JSON_STRING = '{"foobar":"barfoo"}';
}
