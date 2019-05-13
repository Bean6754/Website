#!/bin/bash

while true
do
	/usr/bin/gnuplot -c gnuplot.dat
	/usr/bin/gnuplot -c gnuplot_full.dat
	sleep 10
done
