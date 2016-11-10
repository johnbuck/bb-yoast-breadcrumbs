<?php

class BBYoastBreadcrumbsModuleClass extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Yoast Breadcrumbs Module', 'fl-builder' ),
            'description'     => __( 'Yoast Breadcrumbs Module', 'fl-builder' ),
            'category'        => __( 'Advanced Modules', 'fl-builder' ),
            'dir'             => BBY_MODULES_DIR .'bb-yoast-breadcrumbs-module/',
            'url'             => BBY_MODULES_URL .'bb-yoast-breadcrumbs-module/',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module( 'BBYoastBreadcrumbsModuleClass', array() );