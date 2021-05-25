<?php

namespace Anax\View;

/**
 * Render content within an article.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());
//
?>
<article>
    <div>
        <h2>Välkommen till bokdatabasen</h2>
    </div>
    <form method="get">
            <p>
                <input type="submit" name="books" value="Klicka här för att hantera databasen">
            </p>
    </form>
</article>
