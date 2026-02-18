# Luna Balance

Luna Balance is a WordPress-based website built with a block theme and custom CSS to present classes, events, and booking in a calm and modern design. The project focuses on soft animations, clear navigation, and a responsive experience across mobile and desktop devices.

---

## Features

* Custom navigation (`luna-main-nav`)
* Classes and events displayed in a grid layout
* Modal windows for details and booking
* Subtle animations and hover effects
* Fully responsive design
* Accessibility support using `prefers-reduced-motion`

---

## Structure

The styling is organized into the following sections:

* **Base** – global settings and scroll behavior
* **Animations** – keyframes and fade effects
* **WordPress Blocks** – styling for `wp-block-*` elements
* **Components** – navigation, modals, cards, carousel
* **Utilities** – overrides and helper classes
* **Responsive** – media queries

---

## Tech Stack

* WordPress Block Editor (Gutenberg)
* CSS3 (custom styling and animations)
* Vanilla JavaScript for interactions
* Responsive breakpoints

---

## Installation

1. Install the theme in WordPress.
2. Add the CSS to the theme or via Additional CSS.
3. Ensure blocks use the correct class names (for example `classes-grid`, `luna-modal`).

---

## Customization

Colors and typography are controlled through WordPress presets:

* `--wp--preset--color--sage`
* `--wp--preset--color--warm-clay`
* `--wp--preset--color--charcoal`

Modify these in `theme.json` to change the global design.

---

## License

This project is intended as a custom theme/stylesheet for Luna Balance.
