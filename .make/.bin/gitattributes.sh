#!/usr/bin/env bash

DIRECTORY=${1:-$(pwd)}
KEEP_FILE=".gitattributes.keep"
IGNORE_FILE=".gitignore"

# Get the list of files and directories to exclude
EXCLUDES=$(awk '{print $1}' "$KEEP_FILE" | sed 's|^/||')

# Get the list of files and directories to ignore
IGNORES=$(awk '{print $1}' "$IGNORE_FILE" | sed 's|^/||')

# Get the contents of the directory and sort them alphabetically
CONTENTS=$(find "$DIRECTORY" -mindepth 1 -maxdepth 1 -exec basename {} \; | sort)

# Create an empty .gitattributes file
>"$DIRECTORY/.gitattributes"

# Loop over each file or directory in the contents
while read -r item; do
  # Remove leading forward slash from item path
  item=${item#/}
  if [[ -d "$item" ]]; then
    # Add a trailing slash to the directory name
    item="$item/"
    if [[ ! "${IGNORES[*]}" =~ ${item} ]]; then
      if [[ ! "${EXCLUDES[*]}" =~ ${item} ]]; then
        echo "$item export-ignore" >>"$DIRECTORY/.gitattributes"
      fi
    fi
  else
    if [[ ! "${IGNORES[*]}" =~ ${item} ]]; then
      if [[ ! "${EXCLUDES[*]}" =~ ${item} ]]; then
        echo "$item export-ignore" >>"$DIRECTORY/.gitattributes"
      fi
    fi
  fi
done <<<"$CONTENTS"
