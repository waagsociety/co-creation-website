<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: true
fields:
  title:
    label: Title
    type:  text
  posttitle:
    label: Post-it Title
    type:  text
  button:
    label: Button Text
    type:  text
  buttonurl:
    label: Button URL
    type:  text
  poloimage:
    label: Poloroid Image
    type: select
    options: images
    width: 1/2
  text:
    label: Text
    type:  textarea
    size:  large