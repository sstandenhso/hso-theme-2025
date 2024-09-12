
# HSO Theme 2024

This repository hosts the WordPress theme files for Henry Schein Orthodontic's core website and will also be used for Ortho Technology's core website.



## Components

### Buttons
There are 3 different button styles to utilize.  The first is the base button style, which allows you to choose your background color, text color, border color, etc.  

The other two are custom buttons that are referenced via adding class names.

- hso-gradient-btn (for use on light background)
- hso-gradient-btn-dark (for use on dark background)

**Note:** *For the dark button, you need to include both class names.*


### Container
If you need a section to span the full 1380px container with, add the class name **container** to it.


### Header Navigation
There are 3 navigation menus in the main header packaged in the theme.

- upper-header-nav (This is in the upper section with white background on right side, hidden on mobile)
- site-main-nav--desktop (Hidden on mobile)
    - Submenu dropdowns have classnames for custom styling
        - desktop-brands-dropdown
        - desktop-education-dropdown
        - desktop-shop-dropdown
        - desktop-philosophies-dropdown
- site-main-nav--mobile (hidden on desktop)
    - This menu should include the menu items from upper-header-nav.
    - Submenu and Links classes for custom styling:
        - site-main-nav--mobile-link 
        - mobile-link-has-sub-menu
        - mobile-backlink (this is automatically added to any mobile-link-has-sub-menu child containers)

### Footer
Should be styled accordingly but there are 2 class names to note:
- footer-bottom-section
- footer-upper-cols


## WordPress Custom Patterns

### Product Card
This item is useful if you need a specific product or feature designed to look like a product from a list.

Class Names to note:
- product-card--wrapper
- product-card--text-content


### Hero Sections
There are 4 different patterns available for hero sections depending on the need:
- **HSO Hero Large Color Background**
- **HSO Hero Large Image**
- **HSO Hero Small Color Background**
- **HSO Hero Small Image**

Some class names to note:
- banner-hero
- banner-hero--inner-content-container
- banner-hero--left-col 
- banner-hero--right-col 


### Brochure Section
This is useful if you need some text on the left and an image on the right that spans the full container width.

Some class names to note:
- brochure-sections
- brochure-left 


### Header Top Bar 
This is the section at the very top of the header/main navigation with a white background and links to HSO, OT, and Smilers.


### Product Details with Image Carousel
This section is for the Product/Brand marketing pages.  It has an image on left with selections for the image below, with text about the product on the right.

**The border colors in this section are controlled by the button border color.  So, if you select a border color for the button, then the border on the left of the paragraph text and the border on the bottom of the selected image below will also update to the same color chosen.**

Class names to note:
- selected
- product-detail-border-left
- slideshow-images 


### HSO Posts Swiper
This section is for use on products or posts where you would rather have a swiper effect for mobile instead of having the section wrap the columns.

Class names to note:
- swiper
- posts-swiper 
- swiper-navigation 
- swiper-button-prev 
- swiper-button-next 


### HSO Products Swiper
Same as above but the Brands/Products version used on the home page.


### About Section
This section is for the main About Us section on the About page and is customizable.

Class names to note:
- about-border-left 
- about-divider 


### HSO Background Alternate With Separator
This pattern is a light grey background with a gradient vertical separator line on the top and bottom.  There is no inner content as it is intended for any inner content that the user might want.

**Note:** 

- *To remove the top separator, you must add the classname* **horizontal-separator-bottom-only**.


### HSO Features Columns With Icons
This pattern is to be used anywhere where you have a column layout of icons above small feature text in each column.


### HSO List of Product Cards, 3 Columns
This pattern is a 3 column layout of Brands/Products where the Product Image is a background and the title and subtitle of the product are overlayed in the top left corner. 

### HSO Legal Page Section
This pattern is similar to the About Section in layout but there is no third column.