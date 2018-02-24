import Siema from 'siema';

export default class Gallery {
  constructor(){
    const siemas = document.querySelectorAll('.desc__gallery');
  
    for(const siema of siemas) {
      new Siema({
        selector: siema,
        perPage: 4
      })
    }

  }
  
}
