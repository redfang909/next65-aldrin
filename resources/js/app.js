require('./bootstrap');
import Demo from './demo';

const demo = new Demo();
demo.onLoadWindow();
demo.onDocScroll();
demo.onStageClick();
