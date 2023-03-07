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
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Default tests...${_C_STOP}\n";
	-${_DC_EXEC} -e XDEBUG_MODE=coverage ${APP_CONTAINER} vendor/bin/phpunit $(c)

test_coverage:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Coverage tests...${_C_STOP}\n";
	-${_DC_EXEC} -e XDEBUG_MODE=coverage ${APP_CONTAINER} vendor/bin/phpunit --configuration phpunit.coverage.xml --coverage-text

test_full: test test_coverage
	@${_NO_OP};

##
## —— Application 📦 ———————————————————————————————————————————————————————————
update: cleanse _update_message _generate_tables _cp_files _test_message test_full release done ## Update tables and run tests
	@${_NO_OP};

cleanse: _cleanse_message _do_cleanse ## Cleanse tmp files
	@${_NO_OP};

_cleanse_message:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Cleansing...${_C_STOP}\n";

_do_cleanse:
	@-${_DC_EXEC} ${APP_CONTAINER} find /app/lib/.rendered -mindepth 1 -not -name '.gitignore' -delete
	@-${_DC_EXEC} ${APP_CONTAINER} find /app/lib/template/.cache -mindepth 1 -not -name '.gitignore' -delete

_update_message:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Update tables...${_C_STOP}\n";

_generate_tables:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Generating tables...${_C_STOP}\n";
	@${_DC_EXEC} ${APP_CONTAINER} php bin/console generate:tables -vv

_cp_files:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Copying files...${_C_STOP}\n";
	@-${_DC_EXEC} ${APP_CONTAINER} bash -c "cp -f /app/lib/.rendered/* /app/src/File"

_test_message:
	@${_ECHO} "\n${_C_SELECT} ${PROJECT_NAME} ${_C_STOP} ${_C_INFO}Testing...${_C_STOP}\n";

