#!/usr/bin/env bash

function add_export_ignore_entry {
  local item="$1"
  local file="$2"
  local ignores="${3:-}"
  local keeps="${4:-}"
  if [[ ! "${ignores[*]}" =~ ${item} ]] && [[ ! "${keeps[*]}" =~ ${item} ]]; then
      echo "$item export-ignore" >> "$file"
  fi
}

DIRECTORY=${1:-$(pwd)}
KEEP_FILE=".gitattributes.keep"
IGNORE_FILE=".gitignore"
FILE="$DIRECTORY/.gitattributes"
GIT_DIR="'\n.git/'"

# Get the list of files and directories to exclude
KEEPS=$(awk '{print $1}' "$KEEP_FILE"  | sed 's|^./|/|' | sed 's|^/||')
# Add .git entry to KEEPS list
KEEPS="$(echo -e "$KEEPS""$GIT_DIR")"

# Get the list of files and directories to ignore
IGNORES=$(awk '{print $1}' "$IGNORE_FILE"  | sed 's|^./|/|' | sed 's|^/||')
# Add .git entry to IGNORES list
IGNORES="$(echo -e "$IGNORES""$GIT_DIR")"

echo -e "KEEPS:\n${KEEPS[*]}\n"
echo -e "IGNORES:\n${IGNORES[*]}\n"

# Get the contents of the directory and sort them alphabetically
CONTENTS=$(find "$DIRECTORY" -mindepth 1 -maxdepth 1 -exec basename {} \; | sort)

# Create an empty file
> "$FILE"

# Loop over each file or directory in the contents
while read -r item; do
  if [[ -d "$item" ]]; then
    item="$item/"
  fi
  echo "Adding $item";
  add_export_ignore_entry "$item" "$FILE" "$IGNORES" "$KEEPS"
done <<<"$CONTENTS"

echo -e "\n$FILE contents:"
cat "$FILE"