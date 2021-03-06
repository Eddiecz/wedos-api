<?php

use Krencl\WedosApi;
use PHPUnit\Framework\TestCase;

final class DomainsListTest extends TestCase
{
	public function testDomainListRequest(): void
	{
		$configuration = WedosApi\Configuration::createFromFile(__DIR__ . '/../config.json');
		$client = new WedosApi\Client($configuration);

		$command = new Krencl\WedosApi\Command\DomainsList(Krencl\WedosApi\Constants\DomainStatus::ACTIVE);
		$response = $client->sendRequest($command);

		$this->assertInstanceOf(WedosApi\Response::class, $response);
		$this->assertEquals($response->getStatusCode(), 1000);

		var_dump($response->getData());
	}
}