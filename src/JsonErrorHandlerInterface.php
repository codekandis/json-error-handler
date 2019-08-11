<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use JsonException;

/**
 * Represents the interface of all JSON error handlers.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonErrorHandlerInterface
{
	/**
	 * Checks if an JSON error occurred and throws a `JsonException` if necessary.
	 * @throws JsonException A JSON error occurred.
	 */
	public function handle(): void;
}
