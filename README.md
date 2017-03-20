# device.MD
a simple email user agent detector + for creating dynamic content in emails. developed by steven.c

<img src="https://raw.githubusercontent.com/theotherstevenc/deviceMD/master/device-md.png" width="200"/>

`index.php` will act as the `css` file, and generate styles based on the user-agent, and must be saved on a [`php`](https://en.wikipedia.org/wiki/PHP) enabled web server

Reference the generated `css` as an external stylesheet in the `html`
> `<link rel="stylesheet" type="text/css" href="http://exaple.com/css/">`

On desired elements throughout the `html`, use the `css` class names below to render content specific to the device
- `.ios` renders on iphone/ipad
- `.droid` renders on android
- `.default` renders default content

The example `html` incorporates a minimal `div` layout to illustrate the technique.<br>
View the example on GitHub and change user-agents with a browser extension to see content change: [https://github.com/theotherstevenc/deviceMD/blob/master/src/index.html](http://htmlpreview.github.io/?https://github.com/theotherstevenc/deviceMD/blob/master/src/index.html)

currently this is limited to rendering content specific to devices, but can be expanded on to incorporate different scenarios, and use cases.
- time of day: lot's of variables to take into account
- time of open: in reference to time of send. ex: update urgent messaging to something more delicate    
- day of open: update content if a monday email is not opened until friday
- updated registery for gatherings
- your idea here

> add some interactivity into emails, with a side dish of dynamic content, and we can start to create anticipation
