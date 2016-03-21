<?php if(!defined('KIRBY')) exit ?>

title: Home Section
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  button:
    label: Button Text
    type:  text
  buttonurl:
    label: Button URL
    type:  text
  poloimage:
    label: Poloroid image
    type: select
    options: images
    width: 1/2
  text:
    label: Text
    type:  textarea
  sectiontwo:
    label: Section Two Overlay
    type: checkbox
    text: Is this section two?
  sectionthree:
    label: Section Three Overlay
    type: checkbox
    text: Is this section three?
  
