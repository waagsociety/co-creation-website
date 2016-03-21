<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
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
  imageslider:
    label: Image Slider
    type: checkbox
    text: Display all images in an image slider?
    width: 1/2
  year:
    label: Year
    type:  text
    width: 1/2
  location:
    label: Location
    type:  text
    width: 1/2
  by:
    label: By
    type: text
    width: 1/2
  video:
    label: Video Embed at Bottom of Page
    type: text
  text:
    label: Text
    type:  textarea
  references:
    label: References
    type:  textarea
  partners:
    label: Partners
    type: text
 
