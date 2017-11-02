# CakePHP-CssSafeSlug

In most web apps you will be using a slug to uniquely identify an article or item from the database. This gives you a clean way to access the item in the url. However, in CSS classes are not allowed to start with a number. This is a simple helper which will convert any slug which begins with a number into a safe string which can be used for a css class.

Looking for CakePHP 3? Try this, http://github.com/davidyell/CakePHP3-NumbersToWords

## Requirements
* PHP 5.3.0+
* Intl

## Example
```yml
Article
  Title: "99 Ways to solve a puzzle"
  Slug: "99-ways-to-solve-a-puzzle"
  Unsafe css: "99-ways-to-solve-a-puzzle"
  Safe: "ninety-nine-ways-to-solve-a-puzzle"
```
## Usage
You will need to put the code in your `app/Plugin/CssSafeSlug`, and load the plugin in your `app/bootstrap.php` using `CakePlugin::load('CssSafeSlug');`.

It is also available on Composer. `composer require davidyell/css-safe-slug`

You can call the helper in your view.

```php
<div class="article <?php echo $this->CssClass->convert($article['Article']['slug']);?>">
```

## Handy extras
I couple this up with the [CakeDC/Utils::Sluggable](https://github.com/CakeDC/utils/blob/master/Model/Behavior/SluggableBehavior.php) behaviour.

