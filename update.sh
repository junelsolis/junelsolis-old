#!/bin/bash

git pull

./composer/install.sh

cd app
npm install

npm run --silent production
