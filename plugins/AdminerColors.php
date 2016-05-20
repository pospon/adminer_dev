<?php

/**
 *
 * @author Ondrej Pospisil <ondrej.pospisil@eset.cz>
 */

class AdminerColors
{

    function head()
    {
        static $colors = array(
            '' => '#19A600',
            '127.0.0.1' => '#19A600', // green
            'localhost' => '#19A600', // green
            'lamp2' => '#19A600', // green
            'production' => '#FF0000', // red
            '172.19.120.162' => '#FF9808', // orange
            '172.19.11.142' => '#FF9808', // orange
            '127.0.0.1:3331' => '#FF0000', // red
        );


        if (!isset($colors[$_GET['server']])) {
            return;
        }

        echo '<style>
			#menu { border-left: 1em solid ' . $colors[$_GET['server']] . '; min-height: 100% }
			#menu h1 a { color: ' . $colors[$_GET['server']] . ' }
			#content { margin-left: 22em }
			#breadcrumb { left: 22em }
			</style>';
    }

}
