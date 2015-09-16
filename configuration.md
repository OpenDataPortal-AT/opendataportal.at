Configuration
==============

Configuration of the wordpress installation and all used plugins.

## WORDPRESS
### General
- Site Title -> OpenDataPortal Österreich
- Timezone: Vienna

### Permalinks
- Common Settings -> Post name

### Discussion
- Other comment settings -> enable "Comment author must fill out name and e-mail"
- disable "A comment is held for moderation"
- disable "Comment author must have a previously approved comment"

### Media
- Medium size => Max Width 580px, max Height 400px

### Reading
- Front page displays ->  enable "A static page (select below)"  -> Front page: Landing Page & Posts Page = News

## Plugins 
### Custom Post Types UI
**Custon Post Types**
- cpt_anwendungen
- cpt_highlights
- cpt_datentools

### socialshareprivacy
- enable Dauerhaft aktivieren
- enable Status Facebook
- enable Dauerhaft aktivieren Facebook
- Beschriftung des Buttons: like
- enable Status Twitter
- enable Dauerhaft aktivieren Twitter
- enable Status G+
- enable Dauerhaft aktivieren G+

### Twitter pro
- authorize account

### Acunetix Secure WordPress
- run it

### Breadcrumb NavXT
**General**
- Home Breadcrumb -> Home Template: <a title="Gehe auf %title%." href="%link%" class="%type%">Home</a>
- Blog Breadcrumb  -> Blog Template: <a title="Gehe auf %title%." href="%link%" class="%type%">Home</a>
- disable "Highlight Hierarchy Display"
- disable "Post Hierarchy Display"
- disable "Anwendung Hierarchy Display"
- disable "Highlight Hierarchy Display"
- disable "Datentool Hierarchy Display"

**Post Types**
- Posts: 
	-  Post Hierarchie: Post Parent
- Highlight: 
	-  Highlight Hierarchie: Post Parent
	-  Highlight Root Seite: Highlights
- Anwendung: 
	-  Anwendung Hierarchie: Post Parent
	-  Anwendung Root Seite: Anwendungen
- Datentool: 
	-  Datentool Hierarchie: Post Parent
	-  Datentool Root Seite: Datentools

### All in One SEO 
#### General Settings
**Home Page Settings**
- Home Title: Open Data Portal Österreich
- Home Description: Das zentrale Datenportal für Wirtschaft, Kultur, NGO/NPO, Forschung und Zivilgesellschaft. Das Open Data Portal bietet eine Plattform um auf Daten aus den Bereichen Wirtschaft, NGO/NPO, Forschung und Zivilgesellschaft zu verlinken, entsprechende Daten einzustellen, eingestellte Daten beispielsweise für Web- und Mobil-Anwendungen oder Visualisierungen zu nutzen, sowie daraus entstandenen Services zu präsentieren.
- Home Keywords (comma separated): Offene Daten, Open Data, Portal, Plattform, ODP, AT, Austria, Österreich, CKAN, Public, Private, Privat, Creative Commons, Spreadsheet, CSV, JSON, CKAN, 

#### Social Meta
**Home Page Settings**
- Site Name: OpenDataPortal Oesterreich

**Image Settings**
- Default OG:Image: https://www.opendataportal.at/wp-content/uploads/2014/05/odp_logo_oesterreich_rgb_72-300x288.jpg

**Scan Social Meta**
- run it

### WP Security
- enable "Hide WordPress version for all users but administrators"
- enable "Remove various meta tags generators from the blog's head tag for non-administrators"
- enable "Remove Really Simple Discovery meta tags from front-end"
- enable "Remove Really Simple Discovery meta tags from front-end"
- enable "Remove Windows Live Writer meta tags from front-end"
- enable "Disable error reporting (php + db) for all but administrators"
- enable "Remove core update notifications from back-end for all but administrators"
- enable "Remove plug-ins update notifications from back-end"
- enable "Remove themes update notifications from back-end"
- enable "Remove login error notifications from front-end"
- enable "Hide admin notifications for non admins"
- enable "Try to create the index.php file in the wp-content, wp-content/plugins, wp-content/themes and wp-content/uploads directories to prevent directory listing"
- enable "Remove the version parameter from urls"
- enable "Empty the content of the readme.html file from the root directory"
- enable "Enable Live Traffic tool."

### FeedWordpress

#### Syndicated Sites
- http://data.gv.at/feed/
- http://okfn.at/feed/
- https://www.open3.at/feed
- https://www.wikimedia.at/taxonomy/term/26/feed

#### Feeds and Updates
**Updating Schedule**
- Updates: Cron job or manual updates
	- we used a shell script, which calls the correct url
- Updates Posts: No, leave the syndicated copy unmodified

#### Authors
- Unmatched authors: will have their posts attributed to USERNAME

#### Posts & Links
**Syndicated Posts**
- New posts: Hold syndicated posts for review; mark as Pending
- Updated posts: No, leave the syndicated copy unmodified

**Links**
- Permalinks point to: The copy on the original website
- Posts from aggregator feeds: Give the original source of the post as the source, not the aggregator.

#### Categories & Tags
- Match feed categories: disable all
- Unmatched categories: Don't create any matching terms
- Match inline tags: unselect all
- Unmatched inline tags: Don't create any matching terms

### Advanced Custom Fields
- Posts: Exclude categories
