<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages:
  template: project
sortable: true
fields:
  title:
    label: Title
    type:  text
  coverimage:
    label: Coverimage
    type: select
    options: images
    width: 1/2
  text:
    label: Text
    type:  textarea
  subpagesmenu:
    label: Would you like the subpages to appear in the menu?
    type: checkbox