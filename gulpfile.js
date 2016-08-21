var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.styles(
      ['bootstrap.css']);

    mix.scripts([
       'jquery.js',
       'bootstrap.js'
   ]);


 mix.version(['css/all.css', 'js/all.js']);
});
