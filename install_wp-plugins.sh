#!/bin/bash

## VARIABLES ##

WORDPRESS_ROOT_DIR="ROOTFOLDER"
WORDPRESS_PLUGINS="add-image-src-meta-tag advanced-custom-fields advanced-custom-fields-contact-form-7-field all-in-one-seo-pack antispam-bee breadcrumb-navxt broken-link-checker contact-form-7 custom-post-type-ui custom-ribbon-maker feedwordpress media-library-assistant nextgen-gallery open-external-links-in-a-new-window really-simple-captcha replace-wp-version scholarpress-coins shortcodes-ultimate secure-wordpress spam-free-wordpress syntax-highlighter-compress template-tag-shortcodes tinymce-advanced twitter-widget-pro ultimate-wp-query-search-filter uniform-js wordpress-importer wp-mailto-links wp-piwik wp-security-scan wp-social-share-privacy-plugin"
#WORDPRESS_PLUGINS=""


## INSTALL WORDPRESS PLUGINS ##


#
# check out the latest plugins if any are listed above
#
if [ ! -z "${WORDPRESS_PLUGINS}" ]; then
	for WORDPRESS_PLUGIN in ${WORDPRESS_PLUGINS}; do 
  	svn checkout http://plugins.svn.wordpress.org/${WORDPRESS_PLUGIN}/trunk/ ${WORDPRESS_ROOT_DIR}/wp-content/plugins/${WORDPRESS_PLUGIN} 
	done
fi
 
# remove all .svn folders
find . -iname ".svn" | xargs rm -r $1
 

