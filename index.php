<?php

require_once 'PaginationClass.php';

$pagination = new PaginationClass;

$dummyData = array(
	'Phasellus euismod ex ut mauris rutrum aliquam.',
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	'Praesent a eros ac ipsum elementum pellentesque eu nec odio.',
	'Phasellus euismod ex ut mauris rutrum aliquam.',
	'Maecenas gravida ante lacinia, convallis magna ut, viverra tortor.',
	'Sed et diam cursus, molestie dui sit amet, ornare dui.',
	'Sed sed risus non massa eleifend imperdiet.',
	'Mauris et tortor elementum, porta augue in, luctus mi.',
	'Quisque ac erat mattis, rutrum tortor sed, rutrum mauris.',
	'Fusce at dui sed ipsum cursus rutrum.',
	'Ut mattis elit vitae nisi egestas aliquet.',
	'Sed eget nulla id dui facilisis condimentum vitae eu elit.',
	'Vivamus id tellus vitae eros scelerisque pellentesque.'
);

echo '<ul>';

for ($i = 0; $i < count($dummyData); $i++) {
	echo '<li>' . $dummyData[$i] . '</li>';
}

echo '</ul>';

echo $pagination->renderPagination(count($dummyData));