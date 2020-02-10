![](https://github.com/junelsolis/junelsolis/blob/master/app/public/images/logo.svg)


![](https://img.shields.io/travis/junelsolis/junelsolis?style=flat-square)
![](https://img.shields.io/github/issues/junelsolis/junelsolis?style=flat-square)
![](https://img.shields.io/github/languages/count/junelsolis/junelsolis?style=flat-square)


  
My personal [website](https://www.junelsolis.com) is in desperate need of a makeover. 

The site will be rebuilt afresh and this repository will serve as its codebase. I have decided to make it public to show how I've built it. 
Pull requests from the public are very welcome!

### Mockups
Mockups are done in Figma and can be found [here](https://www.figma.com/file/NbOTnqYEUN4UnoFCmgjWYd/Site?node-id=0%3A1)

### Requirements
- Docker Engine
- Docker Compose

### Installation
- Clone this repository
- Run `./setup.sh`
- Set the `CONTACT_EMAIL_ADDRESS` variable in the `.env` file
- Browse to `http://localhost:8710`

### Projects
The ***Projects*** section of the homepage is dynamically-generated from ***Project*** objects. You can populate this through the command-line by browsing to the root directory of the project and running `docker-compose exec php bash` and then `php artisan tinker`. The following is an example of how to create a Project object and persist in the database:
```
App\Project::create([
    'name' => 'Title of Project',
    'description' => 'Description of Project',
    'url' => 'URL where the project can link to (optional)',
    'image_urls' => 'an array of image urls written as a string',
    'tags' => 'an array of optional tags, written as a string',
]);
```
For more information on this, please have a look at the `Project.php` and `2020_02_09_033742_create_projects_table.php` files. In the future, my plan will be to have project data reside in a Wordpress instance and access it via the Wordpress API.

### Build scripts
In order to build brotli-compressed versions of the files, use the `npm run production` script. For development, use `npm run watch` or `npm run dev` in order to save time.

### Tests
The test suite for this project is located in `./app/tests`
