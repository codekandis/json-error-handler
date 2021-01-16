<?php declare( strict_types = 1 );
namespace CodeKandis\JsonErrorHandler\Tests\DataProviders\UnitTests\JsonErrorCodesTranslatorTest;

use ArrayIterator;
use CodeKandis\JsonErrorHandler\JsonErrorCodesTranslator;

/**
 * Represents a data provider providing JSON error codes translators class names with expected JSON error codes translators class names.
 * @package codekandis/json-error-handler
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonErrorCodesTranslatorClassNamesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonErrorCodesTranslatorClassName'         => JsonErrorCodesTranslator::class,
					'expectedJsonErrorCodesTranslatorClassName' => JsonErrorCodesTranslator::class
				]
			]
		);
	}
}
