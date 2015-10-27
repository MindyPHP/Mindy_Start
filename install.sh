#!/bin/bash

cd app/Modules;
git clone https://github.com/studio107/Admin.git
git clone https://github.com/studio107/Core.git
git clone https://github.com/studio107/Meta.git
git clone https://github.com/studio107/User.git

cd ../../www
git clone git@github.com:studio107/static_admin.git