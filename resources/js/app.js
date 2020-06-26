/* eslint-disable no-use-before-define */
import Demo from './demo';
import Demo2 from './demo2';
import Demos from './dems/demos';
require('./bootstrap');

const a = new Demos();
a.onDocScroll();
const demo = new Demo();
demo.onLoadWindow();
demo.onDocScroll();
demo.onStageClick();

const demo2 = new Demo2();
demo2.onLoadWindow();
