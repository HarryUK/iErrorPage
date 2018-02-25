# iErrorPage
Nicer error pages.

## Why use these?

- The original error pages are actually awful.
- Free
- Nice design
- Lightweight
- Easy to setup

## How do I set this up?

put `error.php`, `error-list.php` and `sadmac.png` into your root directory of your `htdocs`, `www`, etc. folder and add
```apacheconf
# Error Pages
ErrorDocument 400 /error.php
ErrorDocument 401 /error.php
ErrorDocument 403 /error.php
ErrorDocument 404 /error.php
ErrorDocument 503 /error.php
``` to your .htaccess file and if that doesn't exist make one (this is for apache2 different software may or will vary).

# Credit
Harry Chris
