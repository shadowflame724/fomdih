<?php

Breadcrumbs::register('admin.portfolios.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push("Управление портфолио", route('admin.portfolios.index'));
});

Breadcrumbs::register('admin.portfolios.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.portfolios.index');
    $breadcrumbs->push("Создать портфолио", route('admin.portfolios.create'));
});

Breadcrumbs::register('admin.portfolios.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.portfolios.index');
    $breadcrumbs->push("Редактировать портфолио", route('admin.portfolios.edit', $id));
});
