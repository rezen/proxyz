# proxyz
[![Latest Stable Version](https://poser.pugx.org/rezen/proxyz/v)](//packagist.org/packages/rezen/proxyz)

If you are trying to test a PHP application and want to override `file_get_contents` response, you're in for a heap of fun (okay, so not fun). Really, any function that interacts with stateful bits is annoying. PHP has so many functions (not objects) that are in the global namespace that make testing hard. Also if you are writing a plugin for WordPress, you are using functions in the global namespace which you can not overwrite. To mitigate some of this pain, what you need is a method proxy. A method proxy will allow you to override or watch the behaviour of a function in the global namespace effortlessly.



## Install

`composer require rezen/proxyz` 

## Example
In your app, wherever you init and configure things, add a wrapper  
```php
// Wrap around the file_get_contents method
\Proxyz\addWrapper('file_get_contents', function($args, $fn) {
    if ($args[0] === "config.json") {
        return "{}";
    }
    return call_user_func_array($fn, $args);
});

// Force curl to pin the ip down
\Proxyz\addOverride('curl_init', function($url=null) {
    if (is_null($url)) {
        return curl_init($url);
    }

    $host = parse_url($url, PHP_URL_HOST);
    $ip = gethostbyname($host);

    if (in_array($ip, ['127.0.0.1', '169.254.169.254'])) {
        throw new \Exception("Requests to internal IPs are not allowed");
    }
    $resource = curl_init($url);
    curl_setopt($resource, CURLOPT_RESOLVE, [
        "{$host}:443:{$ip}",
        "{$host}:80:{$ip}",
    ]);
    return $resource;
});
```

Wherever you need to override the `file_get_contents`, import the namespaced function.  
```php
use function \Proxyz\Php\Filesystem\file_get_contents;
use function \Proxyz\Php\Curl\{curl_init, curl_setopt, curl_exec};

$config = file_get_contents("config.json");
```

Override a class when need be!
```php
\Proxyz\addOverride(\SplFileInfo::class, \Sample\Dance::class);
$instance = \Proxyz\newInstance(\SplFileInfo::class, [$first]);
\Sample\Dance::class === get_class($instance);
```

## Testing
```sh
composer install
# Unit tests
./vendor/bin/phpunit  -d memory_limit=1024M --testdox ./test/tests/ 

# Performance of functions
php test/performance.php 
```

## Todo
- Code rewriter for detecting native functions and adding `use` imports 
- Improve WordPress references
    - Currently ~20+ functions have variable references
        - `ag --php '\&\$' --ignore *class* --nofilename | awk '$1=$1'  | grep '^function' | grep '_' | grep -v 'tion _' | grep -v sodium | cut -d ' ' -f2 | cut -d'(' -f1 | sort | uniq`
        - **Functions**
          - add_comment_to_entry
          - crypto_generichash_final
          - crypto_generichash_update
          - feed_start_element
          - get_page_hierarchy
          - merge_originals_with
          - merge_with
          - recurse_dirsize
          - separate_comments
          - translate_entry
          - update_page_cache
          - update_post_cache
          - update_post_caches
          - wp_add_id3_tag_data
          - wp_cache_get
          - wp_get_post_revision
          - wp_getimagesize
          - wp_handle_sideload
          - wp_handle_upload
          - wp_handle_upload_error
          - wp_kses_attr_check
          - wp_parse_str