import { LuminousGallery } from 'luminous-lightbox';

export default class Lightbox {
  constructor(){
     new LuminousGallery(document.querySelectorAll('.gallery__item'));
  }
}