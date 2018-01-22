<?php

Breadcrumbs::register('admin.page.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Управление страницами', route('admin.page.index'));
});

Breadcrumbs::register('admin.page.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.page.index');
    $breadcrumbs->push('Редактирование страницы', route('admin.page.edit', $id));
});
