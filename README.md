<p align="center"><img src="https://unisharp.github.io/laravel-filemanager/images/logo_vertical_colored.png"></p>

<p align="center">
  <a target="_blank" href="https://packagist.org/packages/unisharp/laravel-filemanager"><img src="https://poser.pugx.org/unisharp/laravel-filemanager/downloads"></a>
  <a target="_blank" href="https://packagist.org/packages/unisharp/laravel-filemanager"><img src="https://img.shields.io/packagist/dm/unisharp/laravel-filemanager.svg"></a>
  <a target="_blank" href="https://packagist.org/packages/unisharp/laravel-filemanager"><img src="https://img.shields.io/badge/stable-2.0.0-blue.svg"></a>
  <a target="_blank" href="https://packagist.org/packages/unisharp/laravel-filemanager"><img src="https://poser.pugx.org/unisharp/laravel-filemanager/license"></a>
  <br>
  <a target="_blank" href="https://travis-ci.org/UniSharp/laravel-filemanager"><img src="https://img.shields.io/travis/UniSharp/laravel-filemanager.svg"></a>
  <a target="_blank" href="https://scrutinizer-ci.com/g/UniSharp/laravel-filemanager/"><img src="https://scrutinizer-ci.com/g/UniSharp/laravel-filemanager/badges/quality-score.png?b=master"></a>
  <a target="_blank" href="https://codeclimate.com/github/UniSharp/laravel-filemanager/maintainability"><img src="https://api.codeclimate.com/v1/badges/e51f2ef8f4d9f97268db/maintainability" /></a>
  <a target="_blank" href="https://packagist.org/packages/unisharp/laravel-filemanager"><img src="https://img.shields.io/badge/unstable-dev--master-orange.svg"></a>
</p>

<p align="center">
  <a href="http://unisharp.github.io/laravel-filemanager/">Documents</a>
・
  <a href="http://unisharp.github.io/laravel-filemanager/installation">Installation</a>
・
  <a href="http://unisharp.github.io/laravel-filemanager/integration">Integration</a>
・
  <a href="http://unisharp.github.io/laravel-filemanager/config">Config</a>
・
  <a href="http://unisharp.github.io/laravel-filemanager/customization">Customization</a>
・
  <a href="http://unisharp.github.io/laravel-filemanager/events">Events</a>
・
  <a href="http://unisharp.github.io/laravel-filemanager/upgrade">Upgrade</a>
・
  <a href="https://github.com/UniSharp/laravel-filemanager-example-5.3">Demo</a>
・
  <a href="https://github.com/UniSharp/laravel-filemanager/wiki">FAQ</a>
</p>

## v2.1 progress
- This package clone from [unisharp/laravel-filemanager](https://unisharp.github.io/laravel-filemanager) and update format upload for CKeditor version 4.x
- This version fix bug format json response for CKeditor
🎉 Finally v2.1.0 has been released! 🎉

These are primary features of this update:
* Redesigned RWD user interface.
* Supporting multiple files selection.
* Supporting cloud storages integration(with Laravel file system).
* Refactored code and increased test coverage.

Although it is not perfect enough, we decided to release it. Now users who want the above features won't need to install alpha versions anymore.
There are still something we need to do make this package better:
* [ ] Documents for v2.1.0
* [ ] Events should pass object instead of only file path
* [ ] Add more events for files and folders manipulation

We are also going to gain more integration like vue.js and Laravel Nova. Any PR is welcome!

![RWD demo](https://unisharp.github.io/laravel-filemanager/images/screenshots-v2.png)
