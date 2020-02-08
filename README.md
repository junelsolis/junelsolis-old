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
- Browse to `http://localhost:8710`

### Build scripts
In order to build brotli-compressed versions of the files, use the `npm run production` script. For development, use `npm run watch` or `npm run dev` in order to save time.

### Tests
The test suite for this project is located in `./app/tests`
