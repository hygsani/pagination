<?php

class PaginationClass
{

	private $rowPerPage;

	public function __construct($rowPerPage = 10)
	{
		$this->rowPerPage = $rowPerPage;
	}

	public function renderPagination($data, $totalRows)
	{
		echo $this->_renderData($data);

		$totalPage = $totalRows / $this->rowPerPage;

		for ($i = 0; $i < $totalPage; $i++) {
			$params = $i == 0 ? '/' : '?p=' . ($i + 1);

			echo '<a href="' . $params . '">' . ($i + 1) . '</a> | ';
		}
	}

	private function _renderData($data)
	{
		echo '<ul>';

		for ($i = 0; $i < $this->rowPerPage; $i++) {
			echo '<li>(' . ($i + 1) . ') ' . $data[$i] . '</li>';
		}

		echo '</ul>';
	}

}