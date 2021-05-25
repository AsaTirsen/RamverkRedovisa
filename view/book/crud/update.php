<?php

namespace Anax\View;

/**
 * View to create a new book.
 */
// Show all incoming variables/functions
//var_dump(get_defined_functions());
//echo showEnvironment(get_defined_vars());

// Gather incoming variables and use default values if not set
$item = isset($item) ? $item : null;

// Create urls for navigation
$urlToView = url("book");



?><h1>Update an item</h1>
<div>
    <p>To update a link to an image, just add the image name:</p>
    <p>Ex: RobertaKarlson.jpg</p>
</div>

<?= $form ?>

<p>
    <a href="<?= $urlToView . "?books" ?>">View all</a>
</p>
