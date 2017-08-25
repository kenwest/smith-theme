#!/bin/bash
#
# Process the Less files

lessc less/style.less > css/style.css
drush -l smith.citybibleforum.org cc css-js
