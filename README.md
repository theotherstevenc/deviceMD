# Device MD
a simple email user agent detector + for creating dynamic content in emails. developed by steven.c

<img src="https://raw.githubusercontent.com/theotherstevenc/deviceMD/master/device-md.png" width="200"/>

`index.php` will act as the `css` file, and generate styles based on the user agent, and must be saved on a [`php`](https://en.wikipedia.org/wiki/PHP) enabled web server

Reference the generated `css` as an external stylesheet in the `html`
> `<link rel="stylesheet" type="text/css" href="http://exaple.com/css/">`

On desired elements throughout the `html`, use the `css` class names below to render content specific to the device
- `.ios` renders on iphone/ipad
- `.droid` renders on android
- `.default` renders default content

The example `html` incorporates a minimal `div` layout to illustrate the technique.
