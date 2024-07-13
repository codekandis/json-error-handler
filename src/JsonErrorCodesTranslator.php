<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler;

use CodeKandis\ConstantsClassesTranslator\ConstantsClassesTranslator;
use CodeKandis\ConstantsClassesTranslator\ConstantsClassNotFoundExceptionInterface;

/**
 * Represents a JSON error codes translator.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorCodesTranslator extends ConstantsClassesTranslator
{
	/**
	 * Constructor method.
	 * @throws ConstantsClassNotFoundExceptionInterface The input constants class does not exist.
	 */
	public function __construct()
	{
		parent::__construct( JsonErrorCodes::class, JsonErrorMessages::class );
	}
}
