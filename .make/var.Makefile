ifeq ($(wildcard $(_ENV_FILE)),)
    # file does not exist
else
    include $(_ENV_FILE) # to include environment variables
endif

GLOBAL_DEBUG=0

PROJECT_NAME=project.name
PROJECT_SHORT_TITLE=✨

# Git related variables
WORKING_BRANCH=dev
DEFAULT_COMMIT_MESSAGE=~wp

# Docker compose files

# _FILES = -f ${_DOCKER_COMPOSE_FILE} -f docker-compose.override.${_DC_EXTENSION}
_FILES = -f ${_DOCKER_COMPOSE_FILE}
