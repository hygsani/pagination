<?php

class PaginationClass
{

	private $rowPerPage;

	public function __construct($rowPerPage = 10)
	{
		$this->rowPerPage = $rowPerPage;
	}

	public function renderPagination($totalRows)
	{
		$totalPage = $totalRows / $this->rowPerPage;

		for ($i = 0; $i < $totalPage; $i++) {
			echo $i + 1 . ' | ';
		}
	}

}