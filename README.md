# GildedRose-PHP-PHPUnit
GildedRose Refactoring Kata in PHP using PHPUnit.

This kata is meant for confusing and overwhelming. Try to calm down and relax, understand the problem. You can run the test first to get green and have confident to proceed.

# Installation guide

Simply clone this repository and run the following command :

```
composer install
```
![2018-05-02_152026](https://user-images.githubusercontent.com/18492477/39511089-b9fa34ac-4e1e-11e8-8a7d-d5abf2f579d8.png)

after vendor folder has been pulled in and phpunit is available for you, then

```
phpunit
```

![2018-05-02_151916](https://user-images.githubusercontent.com/18492477/39511088-b983b778-4e1e-11e8-853c-db00d238f56b.png)

# Gilded Rose

Hi and welcome to team Gilded Rose.

As you know, we are a small inn with a prime location in a prominent city ran by a friendly innkeeper named Allison. We also buy and sell only the
finest goods. Unfortunately, our goods are constantly degrading in quality as they approach their sell by date. We have a system in place that updates
our inventory for us. It was developed by a no-nonsense type named Leeroy, who has moved on to new adventures. Your task is to add the new feature to
our system so that we can begin selling a new category of items. First an introduction to our system:

- All items have a SellIn value which denotes the number of days we have to sell the item.
- All items have a Quality value which denotes how valuable the item is.
- At the end of each day our system lowers both values for every item.

Pretty simple, right? Well this is where it gets interesting:

- Once the sell by date has passed, Quality degrades twice as fast
- The Quality of an item is never negative
- "Aged Brie" actually increases in Quality the older it gets
- The Quality of an item is never more than 50
- "Sulfuras", being a legendary item, never has to be sold or decreases in Quality
- "Backstage passes", like aged brie, increases in Quality as it's SellIn value approaches; Quality increases by 2 when there are 10 days or less and by 3 when there are 5 days or less but Quality drops to 0 after the concert

We have recently signed a supplier of conjured items. This requires an
update to our system:

- "Conjured" items degrade in Quality twice as fast as normal items

Just for clarification, an item can never have its Quality increase above 50, however "Sulfuras" is a legendary item and as such its Quality is 80 and it never alters.

# Faster Sublime Text PHPUnit Workflow

## Mac users

Adam Wathan has a great post about his test tools.

[Optimizing Your PHPUnit Workflow in Sublime Text](https://adamwathan.me/2017/01/16/optimizing-your-phpunit-workflow-in-sublime-text/)

[adamwathan/sublime-phpunit](https://github.com/adamwathan/sublime-phpunit)

## Windows users
Feel free to use [gerardroche/phpunitkit](https://github.com/gerardroche/sublime-phpunit).


## Suggested settings for Sublime Text (Windows)

```
"phpunit.options":
    {
        "no-coverage": true,
        "verbose": true
    },
```

## Suggested shortcut key binding for trigger (Windows)

```
{"keys": ["ctrl+1"], "command": "phpunit_test_file"},
{"keys": ["ctrl+2"], "command": "phpunit_test_nearest"},
{"keys": ["ctrl+3"], "command": "phpunit_test_last"},
```

## Credits

[emilybache/GildedRose-Refactoring-Kata](https://github.com/emilybache/GildedRose-Refactoring-Kata)

[ahuggins/gilded-rose-phpunit](https://github.com/ahuggins/gilded-rose-phpunit)
