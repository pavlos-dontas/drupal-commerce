## Basic Drupal 10 + commerce installation guide

>  For this development environment, **DDEV** (a Docker wrapper that simplifies things) was used and configured. [guide](https://ddev.readthedocs.io/en/stable/#__tabbed_1_3)

### Installing Drupal commerce

- In a basic Drupal 10 installation, we installed [Drupal commerce](https://drupal.org/project/commerce) using the command **`ddev composer require 'drupal/commerce:^2.37'`**.
- Enabled all the relevant commerce *sub-modules*. [official commerce docs](https://docs.drupalcommerce.org/commerce2/getting-started)

### Creating and configuring product types

- Created 3 new product types, and a few new product variations for each of them, with some basic configuration. [admin page](https://drupal-commerce.ddev.site/el/admin/commerce/config)

- An image field **`field_product_image`** was added for all product types with a pre-configured default image. [admin page](https://drupal-commerce.ddev.site/el/admin/commerce/config/product-types)

### Creating a product views page

- A new view was added [admin page](https://drupal-commerce.ddev.site/el/admin/structure/views/view/catalog). A block was created.
- The view displays products with some basic fields added to the relevant section (e.g. _title_, _image_, _cart button_).
- The block was placed in the **`content`** region, to show a preview of our shop in the *front* page. [admin page](https://drupal-commerce.ddev.site/el/admin/structure/block)

### Checkout functionality

- Drupal commerce comes packed with a variety of different sub-modules out of the box. These modules provide default pre configured "components" like, _Order types_, payment gateways and more.

- For this ==basic== e-commerce presentation, the default shop configuration was used.

### Conclusion

- The user is presented with a basic home page that displays a preview of our products.
- The user can create an account, add products to the cart and visit the cart page to continue with checking out.
- Upon checking out, a new user order & credential registration occurs and can be observed [here](https://drupal-commerce.ddev.site/el/user/1)
- Drupal commerce also has a very informative build-in analytics section [here](https://drupal-commerce.ddev.site/el/admin/commerce)

Creating this e-commerce shop, was very challenging and also learning about Drupal was not easy. Thankfully [Drupal.org](https://drupal.org) and [Drupal commerce docs](https://docs.drupalcommerce.org/)where both very helpful resources of information.

