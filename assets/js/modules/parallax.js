export default class Parallax {  
  constructor() {
    this.init = this.init.bind(this);
    this.setPosition = this.setPosition.bind(this);
    this.animateItem = this.animateItem.bind(this);
    this.handleScrolling = this.handleScrolling.bind(this);

    this.heroImage = document.getElementById('hero__image');
    this.heroBigTitle = document.getElementById('hero__big');
    this.heroSmallTitle = document.getElementById('hero__small');

    window.addEventListener('scroll', this.handleScrolling); 
  }

  handleScrolling() {
    this.init(this.heroImage, 0);
    this.init(this.heroBigTitle, 3);
    this.init(this.heroSmallTitle, -3);
  }

  init(el, displace)  {
    this.animateItem(el, displace);
  }

  setPosition() {
    if (window.pageYOffset !== undefined) {
      return window.pageYOffset;
    } else {
      return (document.documentElement || document.body.parentNode || document.body).scrollTop;
    }
  }

  animateItem(el, displace) {
    if (typeof window.orientation !== 'undefined') { return; }
    let scrollPosition = this.setPosition();
    el.style.transform = "translate3d(0px, "+(scrollPosition / displace)+"px, 0px)";
  }
}