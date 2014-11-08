#!/bin/bash

sqlUser=$1
sqlFiles=(
  01-create-database.sql
  02-create-table-song.sql
  03-insert-demo-data-into-table-song.sql
)
# http://stackoverflow.com/questions/59895/can-a-bash-script-tell-what-directory-its-stored-in
directory="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

for file in ${sqlFiles[@]}
do
  mysql --user="${sqlUser}" < ${directory}/${file}
done
