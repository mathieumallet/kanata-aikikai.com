#!/bin/sh

echo "Publishing..."
#scp -rP 8212 html/* rottawae@ottawaengineers.ca:/home/rottawae/public_html/kanata-aikikai.com/
rsync -avz -e "ssh -p 8212" html/ rottawae@ottawaengineers.ca:/home/rottawae/public_html/kanata-aikikai.com/    

echo "Done."
