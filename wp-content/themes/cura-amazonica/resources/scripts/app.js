import domReady from '@roots/sage/client/dom-ready';
import header from './views/sections/header.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  header.init();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
