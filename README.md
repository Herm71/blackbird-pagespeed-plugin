# Blackbird PageSpeed Plugin

# Synopsis

So far, this plugin will unregister WP_jQuery and re-register jQuery from Google hosted api. It will also remove version query strings from CSS and jQuery files, thus making them static. Each of these functions will increase your PageSpeed.

Because this was developed as a learning tool, it is heavily commented. The bulk of the code resides in `blackbird-starter-plugin/lib/functions/bb_admin.php`. I have referenced the API calls in the heading comments of each section of the code. This is an evolving process, but I hope to have given enough direction to get you started.

# Motivation

I developed this for my own purposes. This plugin was originally developed for a client who's site host I did not have access to. I thought I'd offer it to the community.

# Installation

1. Download the [Blackbird Starter Plugin zip file] (https://github.com/Herm71/blackbird-starter-plugin.git).
2. In your WordPress Dashboard, navigate to **Plugins**.
3. Click the **Add New** button at the top of the page.
4. Click the **Upload Plugin** button at the top of the screen.
5. Click **Choose File**
5. Navigate to the **blackbird-starter-plugin.zip** file you downloaded from [GitHub](https://www.github.com) and click **open**, then click **Install Now**.
6. Once the plugin is installed, click **Activate Plugin**.
7. After the plugin is installed, navigate to **Settings** in the dashboard and you will find a new sub-menu titled, **"Blackbird Custom Plugin Menu."** 

# Contributors

Again, I give credit to [Otto on WordPress](http://ottopress.com) for introducing me to the process and the code structure. Otherwise all code was written by me, [Jason Chafin](http://www.jasonchafin.com), founder and president of [Blackbird Consulting](http://www.blackbirdconsult.com). 

**Twitter:**  @BlackbirdConsul

**GitHub:** `/Herm71`

# License

[Creative Commons 1.0 Universal](LICENSE)

# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## 0.0.1 - 2016-02-044
### Added
- Initial Commit
- Developed plugin

## Changelog Template

## 0.0.0 - 2016-01-22
### Added
- Initial Commit
- Developed plugin

### Changed
- Initial Commit
- Developed plugin

### Fixed
- Initial Commit
- Developed plugin

### Removed
- Initial Commit
- Developed plugin
