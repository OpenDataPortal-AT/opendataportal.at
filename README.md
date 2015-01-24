opendataportal.at
==============

[opendataportal.at](https://www.opendataportal.at/) is based on two robust open source projects: [WordPress](http://wordpress.org) and [CKAN](http://ckan.org). The content seen at [opendataportal.at](http://opendataportal.at) is powered by WordPress while the data catalog at [data.opendataportal.at](http://data.opendataportal.at) is powered by CKAN.

This repository provides the [Issue Tracker](https://github.com/OpenDataPortal-AT/opendataportal.at/issues) for all code, bugs, and feature requests related to these websites. Currently the repository is only used for source version control on the code for the WordPress template, but you will also find pointers to the relevant CKAN code documented below.

## WordPress
The latest version of WordPress is available at: http://wordpress.org/download/

### Theme
The theme is provided in the `/themes/` folder. The theme is based on [roots.io](http://roots.io/starter-theme/).

### Plugins
See the [plugins](plugins.md) page for a list of all the plugins used.

### Deployment
This is a standard WordPress install, so please refer to the [WordPress Docs](http://codex.wordpress.org/Installing_WordPress).

After installation those things need to be done:
- copy custom fields (works via export and import function)
- activate templates:
	- contact: Kontakt 
	- landing page (Front Page)
	- submit application: Anwendung einreichen
	- submit datatool: Datentool einreichen
	- successfull application submission: Erfolg Anwendungen einreichen 
	- applications: Highlights
	- datatools: Datentools
	- theme: Thema
	- themes: Themen
- copy forms for submission of datentools and anwendungen einreichen and contact
- set filter&search for applications, datentools, highlights and news 

The configuration of wordpress and the used plugins can be found in [configuration](configuration.md)

## CKAN
The code used for the [data.opendataportal.at](https://data.opendataportal.at/) instance of CKAN is available on [Github](https://github.com/okfn/ckan/tree/release-datagov), but we recommend the [latest version of CKAN](http://ckan.org/developers/docs-and-download/).

### Extensions
Community extensions:
- [datastore](http://docs.ckan.org/en/latest/maintaining/datastore.html)
- [filestore](http://docs.ckan.org/en/latest/maintaining/filestore.html)
- [datapusher](http://docs.ckan.org/projects/datapusher/en/latest/)

The ODP team developed these CKAN extensions:
- [ckanext-odpat](https://github.com/OpenDataPortal-AT/ckanext-odpat): adaptation of layout & design, structre and text
- [ckanext-odpat-form](https://github.com/OpenDataPortal-AT/ckanext-odpat-form): Form and adaptation of functions and metadata structure to OGD Austria Metadatastandard 2.2

### Deployment
We are in the process of improving documentation.

## Server
On the server following software is installed:
- postgresql
- git
- svn
- python
- php

**CRON Jobs**
- feedwordpress

## Contributing

In the spirit of free software, everyone is encouraged to help improve this project.

Here are some ways you can contribute:

- by using alpha, beta, and prerelease versions
- by reporting bugs
- by suggesting new features
- by translating to a new language
- by writing or editing documentation
- by writing specifications
- by writing code (**no pull request is too small**: fix typos in the user interface, add code comments, clean up inconsistent whitespace)
- by refactoring code
- by closing issues
- by reviewing pull requests

When you are ready, submit a [Pull Request](https://github.com/OpenDataPortal-AT/opendataportal.at/pulls).

## Submitting an Issue
We use the [GitHub Issue Tracker](https://github.com/OpenDataPortal-AT/opendataportal.at/issues) to track bugs and features. Before submitting a bug report or feature request, check to make sure it hasn't already been submitted. When submitting a bug report, please try to provide a screenshot that demonstrates the problem.

## Documentation
We are still in progress to improve the documentation. Please [contact us](https://www.opendataportal.at/kontakt) for further information about our installations.

## License
The project utilizes code licensed under the terms of the GNU General Public License and therefore is licensed under GPL v2 or later.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

Visit http://www.gnu.org/licenses/ to learn more about the GNU General Public License.









