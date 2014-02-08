<?php
$application->registerModules(array(
        'home' => array(
                'className' => 'IKPHP\Frontend\Module',
                'path' => __DIR__ . '/../apps/home/Module.php'
        ),
        'group' => array(
                'className' => 'IKPHP\Group\Module',
                'path' => __DIR__ . '/../apps/group/Module.php'
        ),
        'people' => array(
                'className' => 'IKPHP\People\Module',
                'path' => __DIR__ . '/../apps/people/Module.php'
        )  
));
