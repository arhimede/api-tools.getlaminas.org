#!/bin/bash
STATUS=$(curl -sL -w "%{http_code}" -I "https://api-tools.getlaminas.org" -o /dev/null)
if [ "200" != "${STATUS}" ];then
    exit 1;
fi
