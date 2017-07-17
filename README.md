# simple pagination class for array

example of use:

require_once 'PaginationClass.php';

$pagination = new PaginationClass;

$dataOfArrays = array(
	'yellow', 'green', 'brown', 'black', 'white'
);

echo $pagination->renderPagination($dataOfArrays, count($dataOfArrays); $_GET['p']);