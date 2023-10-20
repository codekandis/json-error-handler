<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

/**
 * Represents the interface of any JSON error handler.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonErrorHandlerInterface
{
	/**
	 * Checks if a JSON error occurred and throws a `JsonExceptionInterface` if necessary.
	 * @throws JsonExceptionInterface A JSON error occurred.
	 */
	public function handle(): void;
}
