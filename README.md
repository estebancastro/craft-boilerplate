# Craft CMS Boilerplate

Craft CMS boilerplate using DDEV for local development and Vite for front-end bundling with hot module replacement (HMR).

## The Stack

- [Craft CMS 5](https://craftcms.com) Content management system.
- [DDEV](https://ddev.com) Local development environment.
- [Vite 6](https://vitejs.dev) Front end build tool with HMR.
- [Tailwind CSS 4](https://tailwindcss.com) Utility-first CSS framework.

#### Craft Plugins

- [Minify](https://plugins.craftcms.com/minify)
- [Vite](https://plugins.craftcms.com/vite)

#### Vite Plugins

- [Critical CSS](https://github.com/nystudio107/rollup-plugin-critical) Vite & Rollup plugin for generating critical CSS that uses the critical generator under the hood.
- [Favicons](https://github.com/khalwat/vite-plugin-favicon) Leverages on favicons to automatically generate your favicons for you.

#### Extras
- [Release It!](https://github.com/release-it/release-it) Generic CLI tool to automate versioning and package publishing.

## Requirements

- [Docker](https://www.docker.com)
- [DDEV](https://ddev.com)

## Install

Bash
```bash
bash <(curl -fsL https://raw.githubusercontent.com/estebancastro/craft-boilerplate/main/install.sh)
```

Fish
```bash
bash (curl -fsL https://raw.githubusercontent.com/estebancastro/craft-boilerplate/main/install.sh | psub)
```

## Roadmap

- Improve documentation.
