import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import '../css/app.css'; 
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
