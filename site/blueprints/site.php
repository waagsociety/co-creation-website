<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Creative Commons
    type:  textarea
  displayheader:
    label: Display Header Image
    type: checkbox
    text: display the header image?
  headertext:
    label: Header Title
    type: text
  headerimage:
    label: Header image
    type: select
    options: images
    width: 1/2
  footerimage:
    label: Footer image
    type: select
    options: images
    width: 1/2
