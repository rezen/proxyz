# proxyz
If you are trying to test a PHP application and want to override `file_get_contents` response, you're in for a heap of fun (okay, so not fun). Really, any function that interacts with stateful bits is annoying. PHP has so many functions (not objects) that are in the global namespace that make testing hard.

## Example
In your app, wherever you init and configure things, add a wrapper  
```php
// Wrap around the file_get_contents method
\Proxyz\addWrapper('file_get_contents', function($args, $fn) {
    if ($args[0] === "config.json") {
        return "{}";
    }
    return all_user_func_array($fn, $args);
});
```

Wherever you need to override the `file_get_contents`, import the namespaced function.  
```php
use function \Proxyz\Filesystem\file_get_contents;

file_get_contents("config.json");
```