<?php if(!defined('KIRBY')) exit ?>

title: Posts
pages:
  template: post
  num: date
  sort: flip
files: false
fields:
  title:
    label: Titel
    type:  text
  subpagesmenu:
    label: Would you like the subpages to appear in the menu?
    type: checkbox