### Quick start installation

```shell
composer install
```

```shell
php artisan october:install
```

### Database migrations

```shell
php artisan october:up
php artisan october:down
php artisan october:env
```

```shell
php artisan create:plugin Author:Plugin_Name
php artisan create:model Author:Plugin Nameofthemodel
php artisan plugin:refresh Author.Plugin_Name
```

Change backend user password
```shell
php artisan october:passwd username password
```

===============================================================================================================================================
## Note for model migrations
add migration name on Author/Plugin_Name/updates/version.yaml

## Installing October

Instructions on how to install October can be found at the [installation guide](https://octobercms.com/docs/setup/installation).


## Learning October

The best place to learn October is by [reading the documentation](https://octobercms.com/docs), [watching some screencasts](https://octobercms.com/support/topic/screencast) or [following some tutorials](https://octobercms.com/support/articles/tutorials).

You may also watch these introductory videos for [beginners](https://vimeo.com/79963873) and [advanced users](https://vimeo.com/172202661).

## Development Team

October was created by [Alexey Bobkov](https://www.linkedin.com/in/alexey-bobkov-232ba02b/) and [Samuel Georges](https://www.linkedin.com/in/samuel-georges-0a964131/), who both continue to develop the platform.

The maintenance of October is lead by [Luke Towers](https://luketowers.ca/), along with many wonderful people that dedicate their time to help support and grow the community.

<table>
  <tr>
    <td align="center"><a href="https://luketowers.ca/"><img src="https://avatars.githubusercontent.com/u/7253840?v=3" width="100px;" alt="Luke Towers"/><br /><sub><b>Luke Towers</b></sub></a></td>
    <td align="center"><a href="https://github.com/bennothommo"><img src="https://avatars.githubusercontent.com/u/15900351?v=3" width="100px;" alt="Ben Thomson"/><br /><sub><b>Ben Thomson</b></sub></a></td>
    <td align="center"><a href="https://github.com/w20k"><img src="https://avatars.githubusercontent.com/u/1053320?v=3" width="100px;" alt="Denis Denisov"/><br /><sub><b>Denis Denisov</b></sub></a></td>
    <td align="center"><a href="https://github.com/mjauvin"><img src="https://avatars.githubusercontent.com/u/2013630?v=3" width="100px;" alt="Marc Jauvin"/><br /><sub><b>Marc Jauvin</b></sub></a></td>
  </tr>
</table>

## Foundation library

The CMS uses [Laravel](https://laravel.com) as a foundation PHP framework.

## Contact

You can communicate with us using the following mediums:

* [Follow us on Twitter](https://twitter.com/octobercms) for announcements and updates.
* [Follow us on Facebook](https://facebook.com/octobercms) for announcements and updates.
* [Join the Official Forum](https://octobercms.com/forum) to engage with the community.
* [Join us on Discord](https://octobercms.com/chat) to chat with us.

### Premium Support

October CMS can provide premium support for a monthly fee. Find out more via the [Premium Support Program](https://octobercms.com/premium-support).

## Contributing

Before sending or reviewing Pull Requests, be sure to review the [Contributing Guidelines](.github/CONTRIBUTING.md) first.

### Coding standards

Please follow the following guides and code standards:

* [PSR 4 Autoloader](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md)
* [PSR 2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
* [PSR 1 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)

### Code of Conduct

In order to ensure that the October CMS community is welcoming to all, please review and abide by the [Code of Conduct](CODE_OF_CONDUCT.md).

## License

The October CMS platform is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Security Vulnerabilities

Please review [our security policy](https://github.com/octobercms/october/security/policy) on how to report security vulnerabilities.
