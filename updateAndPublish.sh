#!/bin/sh

echo "Updating git repo..."
git fetch spark
git reset --hard spark/master

# The publish.sh already prints 'publishing...'
./publish.sh

