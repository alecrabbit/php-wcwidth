ifeq ($(wildcard $(_ENV_FILE)),)
    # file does not exist
else
    include $(_ENV_FILE) # to include environment variables
endif

GLOBAL_DEBUG=0

# Git related variables
WORKING_BRANCH=dev
COMMIT_MESSAGE=~wp

# Docker compose files

# _FILES = -f ${_DOCKER_COMPOSE_FILE} -f docker-compose.override.${_DC_EXTENSION}
_FILES = \
	-f ${_DOCKER_COMPOSE_FILE} \
	-f docker-compose.dev.${_DC_EXTENSION} \

# ------------------------------------------------------------------------------
PROJECT_NAME=php-wcwidth
PROJECT_SHORT_TITLE=🇼

TEST_REPETITION=10
APP_CONTAINER=app
COMPOSER_CONTAINER=app
# COMPOSER_CONTAINER=composer
DUMPER_CONTAINER=${APP_CONTAINER}
APP_DIR=.
APP_PROJECT_NAME=${PROJECT_NAME}
