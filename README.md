# WpLumen

[Laravel Lumen](https://lumen.laravel.com/docs/5.2) framework dressed as a Wordpress theme, that uses Eloquent Models.

As a starter, it comes with [Rollup.js](https://github.com/JeffreyWay/Laravel-Elixir-Rollup) and [Stylus](https://github.com/JeffreyWay/laravel-elixir-stylus) for Laravel Elixir, but you can change this from the `package.json` and `gulpfile.js` files.

All questions/bugs/pull requests related with Lumen itself should be made on [the original Lumen repository](https://github.com/laravel/lumen), but if you find some problems with the Wordpress integration, all issues and pull requests will be appreciated :)

## Installation

1) [Install a new Wordpress project](https://codex.wordpress.org/Installing_WordPress).

2) Clone the repo content into `wp-content\themes\wplumen` folder

3) Open the terminal, go to the `wplumen` folder and [run composer](https://getcomposer.org/doc/00-intro.md). 

6) On the same folder, with the terminal, run `$ sudo npm install`, and then `$ sudo gulp` (without the $ sign!)

5) On the `wplumen` folder, rename the `.env.example` to `.env`, and change the database values with the Wordpress values, that you will find on a `wp-config.php` file at the root of the project.

6) Login in to your wordpress admin panel and change the current theme to 'WpLumen'

7) Profit

## License

Since Lumen is under [MIT License](https://opensource.org/licenses/MIT) and Wordpress is under [GNU General Public License](https://wordpress.org/about/gpl/), and this repo is nothing more than a merge of both projects, this repo has no license. (But it will be nice if you [say my name](http://www.rogervila.es) when you share it!).