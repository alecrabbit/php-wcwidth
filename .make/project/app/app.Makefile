include ${_APP_DIR}/app.init.Makefile

_tools_run: _run_phploc

PHPLOC_DIR = /usr/local/bin

_run_phploc:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}PHPLOC run...${_C_STOP}\n";
	@mkdir -p ${APP_DIR}/.tools/.report/.phploc
	@-${_DC_EXEC} ${APP_CONTAINER} ${PHPLOC_DIR}/phploc src > ${APP_DIR}/.tools/.report/.phploc/.phploc_baseline
	@-cat ${APP_DIR}/.tools/.report/.phploc/.phploc_baseline
	@${_ECHO} "${_C_STOP}\n";

test:
	@$(eval c ?=)
	-${_DC_EXEC} -e XDEBUG_MODE=coverage ${APP_CONTAINER} vendor/bin/phpunit $(c)

test_coverage:
	-${_DC_EXEC} -e XDEBUG_MODE=coverage ${APP_CONTAINER} vendor/bin/phpunit --configuration phpunit.coverage.xml --coverage-text

test_full: test_coverage test

##
## —— Application 📦 ———————————————————————————————————————————————————————————
update: _update_message _generate_tables _cp_files ## Update tables

_update_message:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Update tables...${_C_STOP}\n";

_generate_tables:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Generating tables...${_C_STOP}\n";
	@-${_DC_EXEC} ${APP_CONTAINER} php bin/console generate:tables -vvv

_cp_files:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Copying files...${_C_STOP}\n";
	@-${_DC_EXEC} ${APP_CONTAINER} bash -c "cp -f /app/lib/.rendered/* /app/src/File"

# End of file
##
