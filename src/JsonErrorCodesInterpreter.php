<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use CodeKandis\CodeMessageInterpreter\CodeMessageInterpreter;

/**
 * Represents a JSON error codes interpreter.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorCodesInterpreter extends CodeMessageInterpreter
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct( JsonErrorCodes::class, JsonErrorMessages::class );
	}
}
