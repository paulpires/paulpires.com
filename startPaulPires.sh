#!/bin/bash
export PORT=80
export NODE_ENV='prod'
forever start ./bin/www
# npm start
