<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRy1bius\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRy1bius/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRy1bius.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRy1bius\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRy1bius\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Ry1bius',
    'container.build_id' => '91428399',
    'container.build_time' => 1526976338,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRy1bius');
