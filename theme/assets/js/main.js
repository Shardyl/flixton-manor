/* Flixton Manor — front-end interactions */
(function () {
  // Mobile menu toggle
  var burger = document.querySelector('.burger');
  var menu = document.getElementById('menu');
  if (burger && menu) {
    burger.addEventListener('click', function () { menu.classList.toggle('show'); });
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { menu.classList.remove('show'); });
    });
  }

  // Gallery lightbox
  var lb = document.getElementById('lb');
  var lbimg = document.getElementById('lbimg');
  if (lb && lbimg) {
    document.querySelectorAll('.gal-grid img').forEach(function (img) {
      img.addEventListener('click', function () {
        lbimg.src = this.src;
        lb.classList.add('open');
      });
    });
    lb.addEventListener('click', function () { lb.classList.remove('open'); });
  }
})();
