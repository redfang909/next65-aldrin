/* eslint-disable no-use-before-define */
import Demo from './demo';
require('./bootstrap');

const demo = new Demo();
demo.onLoadWindow();
demo.onDocScroll();
demo.onStageClick();
