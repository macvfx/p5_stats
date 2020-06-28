#!/bin/sh

# Script to collect data
# and put the data into outputfile

CWD=$(dirname $0)
CACHEDIR="$CWD/cache/"
OUTPUT_FILE="${CACHEDIR}p5_stats.txt"
SEPARATOR=' = '

# Business logic goes here
# Replace 'echo' in the following lines with the data collection commands for your module.
HOST_ID=$(/usr/local/aw/bin/nsdchat -c srvinfo hostid)
PORT=$(/usr/local/aw/bin/nsdchat -c srvinfo port)
PLATFORM=$(/usr/local/aw/bin/nsdchat -c srvinfo platform)
VERSION=$(/usr/local/aw/bin/nsdchat -c srvinfo lexxvers)
UPTIME=$(/usr/local/aw/bin/nsdchat -c srvinfo uptime)
LICENSES=$(/usr/local/aw/bin/nsdchat -c License resources)

# Output data here
echo "host_id${SEPARATOR}${HOST_ID}" > ${OUTPUT_FILE}
echo "port${SEPARATOR}${PORT}" >> ${OUTPUT_FILE}
echo "platform${SEPARATOR}${PLATFORM}" >> ${OUTPUT_FILE}
echo "version${SEPARATOR}${VERSION}" >> ${OUTPUT_FILE}
echo "uptime${SEPARATOR}${UPTIME}" >> ${OUTPUT_FILE}
echo "licenses${SEPARATOR}${LICENSES}" >> ${OUTPUT_FILE}
