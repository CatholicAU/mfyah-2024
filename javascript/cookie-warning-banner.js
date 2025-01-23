/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

console.log('Loading cookie notice...');

// function is_first_time()
// {
//     if (isset($_COOKIE['_wp_first_time']) || is_user_logged_in()) {
//         return false;
//     }

//     $domain = COOKIE_DOMAIN ? COOKIE_DOMAIN : $_SERVER['HTTP_HOST'];

//     // expires in 30 days.
//     setcookie('_wp_first_time', '1', time() + (WEEK_IN_SECONDS * 4), '/', $domain);

//     return true;
// }

// if (is_first_time()) {
//      // it's the user's first time, do stuff!
// }