#!/bin/bash

# Creates a release package
DIR="./_release"
mkdir -p "$DIR"

#Sync files
rsync -va ./css/ ./_release/css/
rsync -va ./fonts/ ./_release/fonts/
rsync -va ./fr/ ./_release/fr/
rsync -va ./images/ ./_release/images/
rsync -va ./tpl/ ./_release/tpl/
cp -v ./*.php ./_release/

# Delete hidden files
find ./_release/ -name '.DS*' -delete

# Copy files to LIVE server
rsync -rva ./_release/ vemamuwo@sl1702.web.hostpoint.ch:/home/vemamuwo/www/shiatsu-studio.ch/

rm -rf "$DIR"

echo "Done";