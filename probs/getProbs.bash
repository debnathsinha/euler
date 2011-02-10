#!/bin/bash
for i in {1..323}; do
curl -OL h "http://projecteuler.net/index.php?section=problems&id=$i"  > p$i.html;
php probParse.php p$i;
rm p$i.html;
done
