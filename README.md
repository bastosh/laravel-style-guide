# Laravel Style Guide

> This is the living style guide for this site. We have constructed the style guide in a way that you should only have to edit the styleguide.blade.php to add your app styles, edit the config and section files to customize the pages and markup examples and should be good to go!

## Customizing the style guide

To customize this style guide you will first need to publish the assets. This will place the Laravel Style Guide view files in your application's <pre class="inline"><code class="php">resources/views/vendor</code></pre> directory. Customize these files to suite your needs.

```bash
php artisan vendor:publish
```

## Creating new pages<

To create a new page of the style guide (which will also add it to the navigation) you need to do two things:

1. Create a new html or blade.php file in your application's ```resources/views/vendor``` folder with an appropriate name.
2. Edit the config files in ```resources/views/vendor``` and add your new section to the configuration array

```php
  &lt;?php return [
      'Typography' => 'typeography.html',
      'Buttons' => 'buttons.html',
      'Forms' => 'forms.html',
      'Navigation' => 'navigation.blade.php',
      'Alerts' => 'alerts.html',
      'Colors' => 'colors.html',
      'Something with Spaces' => 'something-with-spaces.html',
  ];
```

## Markup Style

This is the general layout of any section in the page:

```html
  &lt;div class="example"&gt;
    &lt;button class="btn" type="button"&gt;Button button&lt;/button&gt;
    &lt;a class="btn" href="#" role="button"&gt;Link button&lt;/a&gt;

    &lt;pre&gt;&lt;code class="highlight html"&gt;
      &amp;lt;button class="btn" type="button"&amp;gt;Button button&amp;lt;/button&amp;gt;
      &amp;lt;a class="btn" href="#" role="button"&amp;gt;Link button&amp;lt;/a&amp;gt;
    &lt;/code&gt;&lt;/pre&gt;

  &lt;/div&gt;
```

Or you can avoid the annoying escaping it if it's in a blade.php file

```html
    &lt;div class="example"&gt;
      &lt;button class="btn" type="button"&gt;Button button&lt;/button&gt;
      &lt;a class="btn" href="#" role="button"&gt;Link button&lt;/a&gt;

      &lt;pre&gt;&lt;code class="highlight html"&gt;
        {{
          '&lt;button class="btn" type="button"&gt;Button button&lt;/button&gt;
          &lt;a class="btn" href="#" role="button"&gt;Link button&lt;/a&gt;'
        }}
      &lt;/code&gt;&lt;/pre&gt;

    &lt;/div&gt;
  ```
