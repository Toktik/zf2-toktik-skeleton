<?php
/**
 * This configuration should be put in your module `configs` directory.
 */
return array(
    // Use on production environment
    // 'debug'              => false,
    // 'buildOnRequest'     => false,

    // Use on development environment
    'debug' => true,
    'buildOnRequest' => true,

    // This is optional flag, by default set to `true`.
    // In debug mode allow you to combine all assets to one file.
    // 'combine' => false,

    // this is specific to this project
    'webPath' => realpath('public/assets'),
    'basePath' => 'assets',

    'routes' => array(
        '(.*)' => array(
            '@main_css',
            '@main_js'
        ),
    ),

    'modules' => array(
        'App' => array(
            'root_path' => __DIR__ . '/../assets',

            'collections' => array(
                'main_css' => array(
                    'assets' => array(
                        'css/bootstrap.min.css',
                        'css/style.css',
                    ),
                    'filters' => array(
                        '?CssRewriteFilter' => array(
                            'name' => 'Assetic\Filter\CssRewriteFilter'
                        ),
                        '?CssMinFilter' => array(
                            'name' => 'Assetic\Filter\CssMinFilter'
                        ),
                    ),
                    'options' => array(
                        'output' => 'styles/main.css'
                    )
                ),
                'main_js' => array(
                    'assets' => array(
                        'js/html5.js',
                        'js/bootstrap.min.js',
                        'js/jquery.min.js'
                    ),
                    'filters' => array(
                        '?JSMinFilter' => array(
                            'name' => 'Assetic\Filter\JSMinFilter'
                        ),
                    ),
                    'options' => array(
                        'output' => 'js/main.js'
                    )
                ),
                'main_img' => array(
                    'assets' => array(
                        'img/*'
                    ),
                    'options' => array(
                        'move_raw' => true
                    )
                )
            ),
        ),
    ),
);
