#!/usr/bin/env bash

FOLDER="/var/www/html/storage/app/imports"
FILE="$FOLDER/database.json"
DOWNLOADED_FILE="$FOLDER/database.zip"
if [ ! -f "$FILE" ]; then
    curl 'https://3000-adophilus-tsplayground-lze5pemksyg.ws-eu114.gitpod.io' -o "$DOWNLOADED_FILE"
    cd $FOLDER
    unzip database.zip
    rm database.zip
fi