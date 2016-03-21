<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  subpagesmenu:
    label: Would you like the subpages to appear in the menu?
    type: checkbox