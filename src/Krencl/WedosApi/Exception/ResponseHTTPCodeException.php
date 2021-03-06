<?php

namespace Krencl\WedosApi\Exception;

class ResponseHTTPCodeException extends ResponseException
{
	public function __construct(int $httpCode, int $code = 0, \Throwable $previous = null)
	{
		$message = sprintf('API server responded with HTTP code %d', $httpCode);
		parent::__construct($message, $code, $previous);
	}
}