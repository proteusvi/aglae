include docker.mk

.PHONY: test

PHP_VER ?= 8.2

test:
	cd ./tests && PHP_VER=$(PHP_VER) ./run.sh
