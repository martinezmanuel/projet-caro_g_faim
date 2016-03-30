#!/bin/bash
export SYMFONY_ENV=prod
app/console server:run `ifconfig wlan | grep 'inet adr' | cut -d' ' -f12 | cut -d':' -f2`:8000
