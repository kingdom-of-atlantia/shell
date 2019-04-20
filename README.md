# shell
Atlantia Shell (without AEL integration)

Adding the Atlantian Shell is very straightforward for any site hosted on the Atlantian servers. 

## Step 1: Update the login_config.php file
The file is pretty well documented and you should be able to just simply update the listed variables

## Step 2: 
Many sites already have a header.php & footer.php. You may simply replace the contents of those files with the bits 

## Code
<?php
// top of the page
include('/home/atlantia_[domain username]/[your subdomain].atlantia.sca.org/local_config.php');
include('/home/atlantia_templates/atlantia_core/template_top.php');
?>

Your page goes here.

<?php 
// bottom of the page
include('/home/atlantia_templates/atlantia_core/template_bottom.php');
?>
