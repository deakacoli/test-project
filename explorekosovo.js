var body = document.getElementsByClassName('navbar')[0];
        //body.style.backgroundColor = 'green'


  window.onscroll = function (event) {
    var scroll = window.pageYOffset;
      if (scroll >= 300 && scroll < 600) {
        // yellow
        body.style.backgroundColor = 'yellow';
    } else if (scroll >= 600 && scroll < 1200) {
        // blue
        body.style.backgroundColor = 'blue';
    } else if (scroll >= 1200 && scroll < 1800) {
        // orange
        body.style.backgroundColor = 'orange';
    } else if (scroll >= 1800 && scroll < 3000) {
        // red
        body.style.backgroundColor = 'red';
    }
}