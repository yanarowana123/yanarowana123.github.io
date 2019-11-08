let headerNavItem = document.querySelectorAll('.header-nav__item');

document.querySelector('.icon-menu').addEventListener('click',function(){
  document.querySelector('.header-nav__menu').classList.toggle('isVisible')
})

headerNavItem.forEach(function (el) {

  el.addEventListener('mouseenter', function () {
    if (this.children.length > 1) {
      this.querySelector('.lvl1').style.display = 'block';
      this.querySelector('.lvl1').onmouseleave = function () {
        this.style.display = 'none';
      }
    } else {
      return false;
    }
  })

  // el.addEventListener('mouseout', function () {
  //     if (this.children.length > 1) {
  //         this.querySelector('.lvl1').style.display = 'none';

  //     }
  //     else {
  //         return false;
  //     }
  // })

})

