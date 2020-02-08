#!/bin/bash

docker run --rm --interactive --tty \
    --volume $PWD/app:/app \
    composer dump-autoload
