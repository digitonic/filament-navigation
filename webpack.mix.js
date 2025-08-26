const mix = require('laravel-mix')

mix
    .postCss('resources/css/plugin.css', 'resources/dist/plugin.css', [
        require('tailwindcss'),
        require('postcss-prefix-selector')({
            prefix: '.filament-navigation',
            transform: function (prefix, selector, prefixedSelector) {
                if (selector.startsWith('.dark ')) {
                    return '.dark ' + prefix + ' ' + selector.slice(6)
                }
                if (selector.startsWith('[dir="rtl"] ')) {
                    return '[dir="rtl"] ' + prefix + ' ' + selector.slice(12)
                }
                return prefixedSelector
            },
        }),
    ])
    .js('resources/js/plugin.js', 'resources/dist/plugin.js');
