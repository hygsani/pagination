<?php

class PaginationClass
{

	private $rowPerPage;

	public function __construct($rowPerPage = 8)
	{
		$this->rowPerPage = $rowPerPage;
	}

	public function renderPagination($data, $totalRows, $currentPage)
	{
		echo $this->_renderData($data, $currentPage);

		$totalPage = ceil($totalRows / $this->rowPerPage);

		for ($i = 0; $i < $totalPage; $i++) {
			$params = $i == 0 ? '/' : '?p=' . ($i + 1);

			echo '<a href="' . $params . '">' . ($i + 1) . '</a> | ';
		}
	}

	private function _renderData($data, $currentPage)
	{
		if ($currentPage) {
			$start = $currentPage > 2 ? (($currentPage * $this->rowPerPage) - $this->rowPerPage) :
				($currentPage * $this->rowPerPage) - $this->rowPerPage;
			$end = $currentPage > 2 ? ($currentPage * $this->rowPerPage) - 1 : ($currentPage * $this->rowPerPage) - 1;
		} else {
			$start = 0;
			$end = $this->rowPerPage - 1;
		}

		echo '<ul>';

		for ($i = $start; $i <= ($end > count($data) ? $end - ($end - count($data)) - 1 : $end); $i++) {
			echo '<li>(' . ($i + 1) . ') ' . $data[$i] . '</li>';
		}

		echo '</ul>';
	}

}