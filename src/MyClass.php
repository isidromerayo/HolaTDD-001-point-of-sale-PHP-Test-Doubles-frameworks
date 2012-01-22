<?php

/**
 * @author Isidro Merayo
 */
class MyClass
{
	private $logger;
	
	public function __construct(LOGGER $logger)
	{
		$this->logger = $logger;
	}

	public function processSomeData(MyDataProcessor $processor, MyData $data)
	{
		try
		{
			$processor->process($data);
		}
		catch (Exception $e)
		{
			$this->logger->log($e->getMessage());
		}
	}
}
