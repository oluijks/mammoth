#!/bin/bash
sudo find . -type d -exec chmod 770 {} \; && sudo find . -type f -exec chmod 660 {} \;
