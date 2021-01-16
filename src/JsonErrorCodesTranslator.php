<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use CodeKandis\ConstantsClassesTranslator\ConstantsClassesTranslator;

/**
 * Represents a JSON error codes translator.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorCodesTranslator extends ConstantsClassesTranslator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct( JsonErrorCodes::class, JsonErrorMessages::class );
	}
}
