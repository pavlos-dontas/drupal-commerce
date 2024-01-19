## Instructions

> For this development environment, DDEV (a Docker wrapper that simplifies things) was used and configured.

### Installing Drupal commerce

In a basic Drupal 10 installation, we installed [Drupal commerce](https://drupal.org/project/commerce) using the command `ddev composer require 'drupal/commerce:^2.37'`. After that we enabled all the relevant commerce *sub-modules*.

### Creating and configuring product types

Created 3 new product types, and a few new product variations for each of them, with some basic configuration.

An image field (`field_product_image`) was added for all product types with a pre-configured default image.

### Configuring display modes

The `teaser` was enabled and configured for all product types. For the `field_product_image` in this display mode, we added a fixed image style, the Drupal default *Medium (220x220)*. We this we ensure that all of the images will have a fixed size, and create a consistent UI.

### Creating a product views page

A new view was added `admin/structure/views/view/products`. A block and page display where created respectively. The block was placed in the `content` region, to show a preview of our shop in the *front* page.

