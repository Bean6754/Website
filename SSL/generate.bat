@echo off
title Generating a New SSL Certificate

openssl.exe req -x509 -newkey rsa:4096 -keyout key.pem -out cert.pem -days 365 -sha512

title Generated a New SSL Certificate
exit
