<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSmiixnr\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSmiixnr/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSmiixnr.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSmiixnr\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSmiixnr\appProdProjectContainer([
    'container.build_hash' => 'Smiixnr',
    'container.build_id' => '4f1b2eb7',
    'container.build_time' => 1656537832,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSmiixnr');
