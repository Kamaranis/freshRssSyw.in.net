
# Display

## Language

FreshRSS is currently available in 14 languages. After confirming your choice, the interface will be displayed in your preferred language.
Depending on the language chosen, parts of the interface may not be not translated yet. If you're willing to help translate
the missing bits or would like to add a new language, please take a look at how you can [contribute to the project](../contributing.md#contribute-to-internationalization-i18n).

Some parts of FreshRSS aren't translated and aren't intended to be translated either. For now, this includes the logs visible in the application as well as the log generated by automatic update scripts.

Available languages are: cz, de, en, es, fr, he, it, kr, nl, oc, pt-br, ru, tr, zh-cn.

## Theme

There's no accounting for tastes, which is why FreshRSS offers eight official themes:

 * *Blue Lagoon* by **Mister aiR**
 * *Dark* by **AD**
 * *Flat design* by **Marien Fressinaud**
 * *Origine* by **Marien Fressinaud**
 * *Origine-compact* by **Kevin Papst**
 * *Pafat* by **Plopoyop**
 * *Screwdriver* by **Mister aiR**
 * *Swage* by **Patrick Crandol**

If you can't find any themes you like, it's always possible to [create your own](../developers/04_Frontend/02_Design.md).

To select a theme, simply scroll through the themes and select one that strikes your fancy. After confirmation, the theme will be applied to the interface.

## Content width

Some people prefer short lines of text, while others prefer to maximize the available screen space. To satisfy the maximum number of people, it's possible to customize the width of the displayed content. There are four settings available:

 * **Fine** displays content up to a maximum width of 550 pixels
 * **Medium** displays content up to a maximum width of 800 pixels
 * **Large** displays content up to a maximum width of 1000 pixels
 * **No limit** displays the content on 100% of the available space

## Article icons

Please note that this section only affects normal view.

![Article icons configuration](../img/users/configuration.article.icons.png)

Each article is rendered with a header (top line) and a footer (bottom line).
In that section, you can choose what will be displayed in those.

If you disable every item in the top line, you'll still be able to see it since
it contains the feed name and the article title. But if you do the same thing for
the bottom line, it will be empty.

## HTML5 notification timout

After automatically updating the feeds, FreshRSS can pop up a notification using the HTML5 notification API.

The duration of this notification can be set. By default, the value is 0.

## Show the navigation button

By default, FreshRSS displays buttons to ease the article navigation when browsing on mobile. The drawback is that they eat up some precious space.

![navigation button configuration](../img/users/configuration.navigation.button.png)

If you don't use those buttons because you never browse on mobile or because you browse with gestures, you can disable them from the interface.

# Reading

## Number of articles per page

This setting defines the number of articles to display at once before needing to load more. In normal and reading view, more articles are loaded automatically. In global view, a button will appear at the bottom of the list. 

## Articles to display

The status of articles to display when loading FreshRSS. "Adjust showing" will display only unread articles by default, but will display all articles when there are no unread articles to show. 

## Use "lazy load" mode to load images

This will set images to load as they are viewed. This can save data, but will can cause images to load in later.

# Archival

## Archiving

These are the global options for fetching and retaining articles from feeds. They can be overwridden by individual feed's settings.

## Maintenance 

This allows for purging/optimizing the current user's articles in the database. 

# Sharing

To make your life easier, you can share articles straight from FreshRSS.

At the moment, FreshRSS supports 18 sharing methods, ranging from self-hosted services (Shaarli, etc.) to proprietary services (Facebook, etc.).

By default, the sharing list is empty.
![Sharing configuration](../img/users/configuration.sharing.png)

To add a new item to the list, please follow the following simple steps:

 1. Select the desired sharing method in the drop-down list.
 1. Press the ```✚``` button to add it to the list.
 1. Configure the method in the list. All  names can be modified in the display. Some methods need the sharing URL to be able to work properly (ex: Shaarli).
 1. Submit your changes.

To remove an item from the list, follow those simple steps:

 1. Press the ```❌``` button next to the share method you want to remove.
 1. Submit your changes.



# Shortcuts

To ease the use of the application, FreshRSS comes with a lot of predefined keyboard shortcuts.
They allow actions to improve the user experience with a keyboard.

Of course, if you're not satisfied with the key mapping, you can change you configuration to fit your needs.

There are 4 types of shortcuts:

 1. Views: they allow switching views with ease.
 1. Navigation: they allow navigation through articles, feeds, and categories.
 1. Article actions: they allow interactions with an article, like sharing or opening it on the original web-site.
 1. Other actions: they allow other interactions with the application, like opening the user queries menu or accessing the documentation.

It's worth noting that the share article action has two levels. Once you press the shortcut, a menu containing all the share options opens.
To choose one share option, you need to select it by its number. When there is only one option, it's selected automatically though.

The same process applies to the user queries.

Be aware that there is no validation on the selected shortcuts.
This means that if you assign a shortcut to more than one action, you'll end up with some unexpected behavior.

# User queries

You can configure your [user queries](./03_Main_view.md) in that section. There is not much to say here as it is pretty straightforward.
You can only change user query titles or drop them.

At the moment, there is no helper to build a user query from here.

# Profile

You can change your email address or password here. The authentication token is required for accessing the aggregated RSS feed for a user. A blank token will disable accessing the RSS feed without being logged in. 

# Extensions

Extensions can be managed from this menu. Note that while extensions can be removed from the web interface, they cannot be added from it. 

# Users

**TODO**

## Authentication methods

### HTTP Authentication (Apache)

 1. User control is based on the `.htaccess` file.
 2. It is best practice to place the `.htaccess` file in the `./i/` subdirectory so the API and other third party services can work.
 3. If you want to limit all access to registered users only, place the file in the FreshRSS directory itself or in a parent directory. Note that WebSub and API will not work!
 4. Example `.htaccess` file for a user "marie":

```
AuthUserFile /home/marie/repertoire/.htpasswd
AuthGroupFile /dev/null
AuthName "Chez Marie"
AuthType Basic
Require user marie
```

More information can be found in the [Apache documentation](http://httpd.apache.org/docs/trunk/howto/auth.html#gettingitworking).
