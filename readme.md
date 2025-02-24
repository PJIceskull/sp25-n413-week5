# Assignment 3 | Music Academy Theme

Table of Content

- [Week Recap](#week-recap)
- [Dynamic Blocks](#dynamic-blocks)
- [Theme.json](#themejson)

## Week Recap

During this week, we learn how to create our own blocks along with dynamic blocks. Another important topic we learn is using the `theme.json` file to create our own styles for WP editor.

### Dynamic Blocks

### Theme.json

For each theme for our WordPress site, we have a **theme editor** we can used to stylize the content of our website. However, we can customize the properties and styles of our theme editor by using the `theme.json` file. In the `theme.json` file, we can write our own theme settings as it's in the correct code format.
For example, here is the setting I used to define the color palette of my site.

```json
{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "version": 0.1,
  "settings": {
    "appearanceTools": true,
    "color": {
      "palette": [
        {
          "color": "#FDECEF",
          "slug": "background",
          "name": "Background"
        },
        { "color": "#0F110C", "slug": "text", "name": "Text" },
        { "color": "#CECCCC", "slug": "accent", "name": "Accent" },
        { "color": "#612940", "slug": "primary", "name": "Primary" },
        { "color": "#9D6381", "slug": "secondary", "name": "Secondary" }
      ]
    }
  }
}
```
