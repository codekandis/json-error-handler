<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\Fixtures;

/**
 * Represents an enumeration of invalid values.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class InvalidValues
{
	/**
	 * Represents an invalid JSON string.
	 */
	public const string JSON_STRING = '{"foobar":}';
}
