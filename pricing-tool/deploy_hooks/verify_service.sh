#!/bin/bash
set -ex

result=$(curl -s http://localhost:8080/ping.php)

if [[ "$result" =~ "pong" ]]; then
	echo 'app is up!'
    exit 0
else
	echo 'app is down!'
    exit 1
fi