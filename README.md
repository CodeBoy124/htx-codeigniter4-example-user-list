# Htx Codeigniter Example
A simple example project using [htx](https://github.com/CodeBoy124/htx-cli) and [codeigniter](https://codeigniter.com/)

## Getting started
First rename the `env` file to `.env`.

After that you can open the src folder to view all htx code and you can take a look at the htx_config.json file to look at the configuration.
If you want to view the converted code you can run `htx` in the root of the project if you have htx installed.
You can view the output in the `app/Views` directory.

If you want to run the project first run the migrations and the seeder using `php spark migrate` and `php spark db:seed AddUsers` and configure the `app/Config/Database.php` file to work for you
After that you are ready to run `php spark serve` and open [http://localhost:8080/](http://localhost:8080/)

For more inforation check out [htx](https://github.com/CodeBoy124/htx-cli) or [codeigniter](https://codeigniter.com/) depending on what you want to know