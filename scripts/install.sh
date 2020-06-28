#!/bin/bash

# p5_stats controller
CTL="${BASEURL}index.php?/module/p5_stats/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/p5_stats.sh" -o "${MUNKIPATH}preflight.d/p5_stats.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/p5_stats.sh"

	# Set preference to include this file in the preflight check
	setreportpref "p5_stats" "${CACHEPATH}p5_stats.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/p5_stats.sh"

	# Signal that we had an error
	ERR=1
fi
