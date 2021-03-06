<?php

/**
 * Array of asset distribution rules
 *
 * @package plugins.contentDistribution
 * @subpackage api.objects
 */
class KalturaAssetDistributionRulesArray extends KalturaTypedArray
{
	public static function fromDbArray(array $arr)
	{
		$newArr = new KalturaAssetDistributionRulesArray();
		if ($arr == null)
			return $newArr;

		foreach ($arr as $obj)
		{
			$nObj = new KalturaAssetDistributionRule();
			$nObj->fromObject($obj);
			$newArr[] = $nObj;
		}

		return $newArr;
	}

	public function __construct()
	{
		parent::__construct("KalturaAssetDistributionRule");
	}
}