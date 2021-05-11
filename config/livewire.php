<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Namespace
    |--------------------------------------------------------------------------
    |
    | This value sets the root namespace for Livewire component classes in
    | your application. This value affects component auto-discovery and
    | any Livewire file helper commands, like `artisan make:livewire`.
    |
    | After changing this item, run: `php artisan livewire:discover`.
    |
    */

    'class_namespace' => 'App\\Http\\Livewire',

    /*
    |--------------------------------------------------------------------------
    | View Path
    |--------------------------------------------------------------------------
    |
    | This value sets the path for Livewire component views. This affects
    | file manipulation helper commands like `artisan make:livewire`.
    |
    */

    'view_path' => resource_path('views/livewire'),

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | The default layout view that will be used when rendering a component via
    | Route::get('/some-endpoint', SomeComponent::class);. In this case the
    | the view returned by SomeComponent will be wrapped in "layouts.app"
    |
    */

    'layout' => 'layouts.app',

    /*
    |--------------------------------------------------------------------------
    | Livewire Assets URL
    |--------------------------------------------------------------------------
    |
    | This value sets the path to Livewire JavaScript assets, for cases where
    | your app's domain root is not the correct path. By default, Livewire
    | will load its JavaScript assets from the app's "relative root".
    |
    | Examples: "/assets", "myurl.com/app".
    |
    */

    'asset_url' => null,

    /*
    |--------------------------------------------------------------------------
    | Livewire Endpoint Middleware Group
    |--------------------------------------------------------------------------
    |
    | This value sets the middleware group that will be applied to the main
    | Livewire "message" endpoint (the endpoint that gets hit everytime
    | a Livewire component updates). It is set to "web" by default.
    |
    */

    'middleware_group' => 'web',

    /*
    |--------------------------------------------------------------------------
    | Livewire Temporary File Uploads Endpoint Configuration
    |--------------------------------------------------------------------------
    |
    | Livewire handles file uploads by storing uploads in a temporary directory
    | before the file is validated and stored permanently. All file uploads
    | are directed to a global endpoint for temporary storage. The config
    | items below are used for customizing the way the endpoint works.
    |
    */

    'temporary_file_upload' => [
        'disk' => null,        // Example: 'local', 's3'              Default: 'default'
        'rules' => null,       // Example: ['file', 'mimes:png,jpg']  Default: ['required', 'file', 'max:12288'] (12MB)
        'directory' => null,   // Example: 'tmp'                      Default  'livewire-tmp'
        'middleware' => null,  // Example: 'throttle:5,1'             Default: 'throttle:60,1'
        'preview_mimes' => [   // Supported file types for temporary pre-signed file URLs.
            'png', 'gif', 'bmp', 'svg', 'wav', 'mp4',
            'mov', 'avi', 'wmv', 'mp3', 'm4a',
            'jpg', 'jpeg', 'mpga', 'webp', 'wma',
        ],
        'max_upload_time' => 5, // Max duration (in minutes) before an upload gets invalidated.
    ],

    /*
     |--------------------------------------------------------------------------
     | Manifest File Path 
     |--------------------------------------------------------------------------
     |
     | This value sets the path to the Livewire manifest file.
     | The default should work for most cases (which is
     | "<app_root>/bootstrap/cache/livewire-components.php)", but for specific
     | cases like when hosting on Laravel Vapor, it could be set to a different value.
     |
     | Example: for Laravel Vapor, it would be "/tmp/storage/bootstrap/cache/livewire-components.php".
     |
     */

    'manifest_path' => null,
    
    /*
     |--------------------------------------------------------------------------
     | Configuring The Asset Base URL
     |--------------------------------------------------------------------------
     |
     | By default, Livewire serves its JavaScript portion (livewire.js) from the following route in your app: /livewire/livewire.js.
     | The actual script tag that gets generated defaults to:
     | <script src="/livewire/livewire.js"></script>
     | There are two scenarios that will cause this default behavior to break:
     | You publish the Livewire assets and are now serving them from a sub-folder like "assets".
     | Your app is hosted on a non-root path on your domain. For example: https://your-laravel-app.com/application. In this case, the actual assets will be served from /application/livewire/livewire.js, but the generated script tag, will be trying to fetch /livewire/livewire.js.
     | To solve either of these issues, you can configure the "asset_base_url" in config/livewire.php to customize what's prepended to the src="" attribute.
     | For example, after publishing Livewire's config file, here are the settings that would fix the above two issues:
     |
     */

    'asset_base_url' => '/assets',
    'asset_base_url' => '/application'

];
