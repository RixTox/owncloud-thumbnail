files_thumbnail
==================

This is an ownCloud thumbnail generator application. Used as a public GET/REST API to gather file thumbnails from clients.<br />
All the thumbnails generated will be stored in __ownCloud/data/{$username}/files_thumbnail/__<br />
Thumbnails will be removed if the associated file was deleted.

## Installation
* Clone the code into your ownCloud apps directory. Name it as __files_thumbnail__.
* Enable the application from your ownCloud administration panel.

## Usage
> http://domain/owncloud/?app=files_thumbnail&path=/subdir/imagefile.jpg&size={xs, s, m, l, xl}
