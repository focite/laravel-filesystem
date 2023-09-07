<?php

namespace Focite\Filesystem\Obs\Internal\Signature;

use Focite\Filesystem\Obs\Internal\Common\Model;

interface SignatureInterface
{
	function doAuth(array &$requestConfig, array &$params, Model $model);
}