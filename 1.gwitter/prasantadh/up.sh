#!/bin/bash
set +euox
docker build --no-cache -t gajabaar-prasant-gwitter .
docker run --publish 8081:80 gajabaar-prasant-gwitter
