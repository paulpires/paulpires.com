#!/bin/bash
export PORT=80
export NODE_ENV='production'
rm ~/foreverOut
rm ~/stdOut
rm ~/stdErr
forever -l ~/foreverOut -o ~/stdOut -e ~/stdErr start ./bin/www
# npm start
