<?php
$SHORT_ORDER = "Group";
$SITE_TITLE = $SHORT_ORDER.", Kingdom of Atlantia";
$SITE_TITLE_MENU = $SHORT_ORDER."'s"; # Example: Menu
$SITE_TITLE_HEADER = "Welcome to the ".$SHORT_ORDER."s site."; # Example: Welcome to our page!
$SITE_WEBMIN_LABEL = "Master foo@barbaian.ugh";
$SITE_WEBMIN_ADDRESS = "foo@atlantia.sca.org";
$SITE_OFFICE_IMAGE = "/images/logo.gif"; # if null, no graphic.
$SITE_DEBUG = false;

/*
The navigation array elements are, themselves, just basic arrays each contains 3 elements:
- label, what you want to be in the menu
- link, where you want the menu to take you OR if the value is null it is just a label with no link
- new_window, if you have a link should it open in a new window?
*/

/*
Basic menu, what is used for most sites
There is a more full featured availble in the Orders Project if that is what you need.
*/

$SITE_MENU = array
  (
  array("Acorn eNewsletter","http://enewsletter.sca.org/atlantia.html",true),
  array("Policies","http://atlantia.sca.org/offices/seneschal/clerk-of-law/policy/chronicler",true),
  array("Chroniclers","Warranted-Chroniclers.html",false),
  array("Release Forms","Warrant.html",false),
  array("Warrant Form","Releases.html",false),
  array("Listing of Releases","Release-Listing.html",false),
  array("Baronial Newsletters","Baronial-Newsletters.html",false)
  );

?>