<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_object_list', '/admin/object');
set_route('admin_object_new', '/admin/object/new');
set_route('admin_object_save', '/admin/object/save');
set_route('admin_object_edit', '/admin/object/edit/{id}');
set_route('admin_object_delete_category', '/admin/object/delete/category');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/object', function () use ($router) {

    //object home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('object');
        set_action('admin_object_list');
    });

    //object create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('object');
        set_action('admin_object_new');
    });

    //object save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('object');
        set_action('admin_object_save');
    });

    //object update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_object_edit');
        set_get_parameter('id', $request->id);
        set_module('object');
    });

    //pbject category iig ustgah
    $router->respond('POST', '/delete/category', function ($request, $response) {

        set_module('object');
        set_action('admin_object_delete_category');
        set_get_parameter('object_id', $request->content_id);
        set_get_parameter('category_id', $request->category_id);
    });
});
