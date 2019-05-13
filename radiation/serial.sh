#!/bin/bash

## ## ## ## ## ## ## ## ## ## ## ## ## ##
## RUN UNDER ESXi Terminal!! Not SSH!  ##
## ## ## ## ## ## ## ## ## ## ## ## ## ##

sudo chmod 666 /dev/ttyUSB0
sudo cu -l /dev/ttyUSB0 -s 9600 >> log.txt
