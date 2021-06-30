#!/bin/bash
set -ex

echo 'Set workdir proper permissions..'
sudo chown -R www-data:www-data /var/www/pricing.auvis.com

echo 'Sending after notification to Slack...'
curl -X POST -H 'Content-type: application/json' \
--data '{"text":"```
ENV: dev
APP: pricing-tool
COMMIT: dev
STATUS: done
```"}' \
https://hooks.slack.com/services/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