<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFfSXPuZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFfSXPuZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFfSXPuZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFfSXPuZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFfSXPuZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'FfSXPuZ',
    'container.build_id' => '4afc457a',
    'container.build_time' => 1617291083,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFfSXPuZ');
