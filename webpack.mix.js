const mix = require('laravel-mix');

mix
    .combine(['resources/sass/app.css','resources/sass/bundler.css','resources/sass/awesome.css'], 'resources/dist/app.css')
    .postCss('resources/dist/app.css', 'public/css', [
        require('tailwindcss'),
        require('cssnano')({
            preset: 'default',
        }),
        require('@fullhuman/postcss-purgecss')({
            // Specify the paths to all of the template files in your project 
            content: [
                'resources/views/**/*.php'
            ],
            whitelist: ['parent', 'page-item' ,'go-to', 'border-2', 'border-red-500', 'replacement'],
            defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g)
        })
    ])