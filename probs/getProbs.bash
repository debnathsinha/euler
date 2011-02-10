#!/bin/bash
for i in {1..2}; do
curl -OL h "http://projecteuler.net/index.php?section=problems&id=$i"  > p$i.html;
done
