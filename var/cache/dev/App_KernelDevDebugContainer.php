<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQkJPq8n\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQkJPq8n/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQkJPq8n.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQkJPq8n\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQkJPq8n\App_KernelDevDebugContainer([
    'container.build_hash' => 'QkJPq8n',
    'container.build_id' => 'fc41aec7',
    'container.build_time' => 1696857458,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQkJPq8n');
