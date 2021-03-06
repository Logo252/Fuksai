![SkyAboveUs](https://s16.postimg.org/fna1mt7px/Logomakr_8k_Hl_Xj.png)

[![Build Status](https://travis-ci.org/nfqakademija/Fuksai.svg?branch=master)](https://travis-ci.org/nfqakademija/Fuksai)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nfqakademija/Fuksai/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nfqakademija/Fuksai/?branch=master)

# Table of Contents

* [Project Description](#project-description)
* [Requirements](#requirements)
* [Prepare project](#download)
* [Commands](#commands)

# <a name="project-description"></a>Project Description

SkyAboveUs is a web project developed for people who are interested in astronomy.

# <a name="requirements"></a>Environment requirements

* PHP (7.0)
* MySQL
* Composer
* Symfony 3.1

## <a name="download"></a>Download and prepare the project

1. Install [Git](https://git-scm.com/downloads)
1. Clone repository 'git clone https://github.com/nfqakademija/Fuksai.git'
1. cd 'fuksai'
1. Get [Composer](https://getcomposer.org/download/)
1. Run 'composer install'

## Prepare database - run commands:

1. To create database and insert fixtures and all needed data to database you need to execute bash script file that is in the root folder of symfony (example: var/www/html/project) and execute ./setup.sh.

## Run project

* php bin/console server:run

## <a name="commands"></a>Commands should be scheduled

* `app:import:iss` should be executed once a minute
* `app:import:videos` should be executed at least once a day
* `app:import:news` should be executed once an hour
* `app:planet-position` should be executed once an hour
* `app:send:notifications` should be executed twice a day
* `app:import:apod` should be executed once a day
