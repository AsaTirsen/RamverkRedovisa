<?php

namespace Anax\View;

/**
 * View to create a new book.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$items = isset($items) ? $items : null;

// Create urls for navigation
//$urlToViewItems = url("book");



?><h1>Add a book</h1>

<div>
    <p>To add a link to an image, just add the image name:</p>
    <p>Ex: RobertaKarlson.jpg</p>
</div>
<?= $form ?>

<p>
    <a href="<?= url("book?books")?>">View all</a>
</p>
