.PHONY: build dev launch up

# Default build command
build:
	ddev npm run build

# Start the project (if not already started) and run dev
dev: up
	ddev npm run dev

# Start the project (if not already started) and launch the site
launch: up
	ddev launch

# Ensure ddev is started before running any other commands
up:
	@if ! ddev describe | grep -q "OK"; then \
		ddev start; \
	fi

# Catch-all for any undefined targets (no-op)
%:
	@:
