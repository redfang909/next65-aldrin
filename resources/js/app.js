/* eslint-disable no-use-before-define */
import Demo from './demo';
import Demos from './dems/demos';
import 'alpinejs';
require('./bootstrap');

const a = new Demos();
a.onDocScroll();
const demo = new Demo();
demo.onLoadWindow();
demo.onDocScroll();
demo.onStageClick();
