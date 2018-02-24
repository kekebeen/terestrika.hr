# Kirby Image Optimizer Plugin
Kirby CMS Plugin for automatic image compression and scaling for new or replaced panel uploads.

## Requirements
- You need at least Kirby CMS v 2.1.
- Your PHP version has to support PHP's GD and Image Functions. Check via: `var_dump(gd_info())`

## Installation

Copy or clone this repository into your `/site/plugins` directory.<br>
Edit your `config.php` as follows:

#### Basic setup
```php
c::set('imageoptim', true); // {true} activate the plugin
```
#### Advanced options
```php
// Quality compression in percentage. (0 = lowest quality, 100 = highest quality)
c::set('imageoptim.quality', 90); // default: 90

// Downscale the image to a given width.
c::set('imageoptim.max_width', 1920); // default: disabled (no scaling)
```
## Notes
Currently supported Filetypes: `JPG`, `PNG`.

## Contribution
Feel free to fork this project or open issues.
