#!/bin/bash

[ -d env ] || python3 -m venv env
./env/bin/pip install -r requirements.txt
