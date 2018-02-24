var $ = require("zepto-modules/zepto");
require("zepto-modules/event");
window.$ = $;

//import modules
import Hero from "./modules/hero.js";
import Parallax from "./modules/parallax.js";
import Gallery from './modules/gallery.js';
import Lightbox from './modules/lightbox.js';
import Services from './modules/services.js';

const hero = new Hero();
const parallax = new Parallax();
const gallery = new Gallery();
const lightbox = new Lightbox();
const services = new Services();