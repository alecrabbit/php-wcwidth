#!/usr/bin/env bash
FILE=".start_time"
if [ -f "$FILE" ]; then
    START=$(cat $FILE)
    STOP=$(date +"%s")
    # shellcheck disable=SC2004
    DIFF=$(($STOP-$START))
    # shellcheck disable=SC2004
    printf 'Time elapsed %dh:%dm:%ds\n' $(($DIFF/3600)) $(($DIFF%3600/60)) $(($DIFF%60))
    rm $FILE
fi
