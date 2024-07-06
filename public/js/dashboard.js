// NavBar Toggler
function toggleNav() {
    var screenWidth =
      window.innerWidth ||
      document.documentElement.clientWidth ||
      document.body.clientWidth;
  
    if (screenWidth < 767) {
      if (document.getElementById("side-navBar").style.width === "200px") {
        document.getElementById("side-navBar").style.width = "0";
        document.getElementById("main-container").style.transform =
          "translateX(0)";
      } else {
        document.getElementById("side-navBar").style.width = "200px";
        document.getElementById("main-container").style.transform =
          "translateX(200px)";
        document.getElementById("main-container").style.transition = "0.5s";
      }
    } else {
      if (document.getElementById("side-navBar").style.width === "250px") {
        document.getElementById("side-navBar").style.width = "0";
        document.getElementById("main-container").style.marginLeft = "0";
      } else {
        document.getElementById("side-navBar").style.width = "250px";
        document.getElementById("main-container").style.marginLeft = "250px";
        document.getElementById("main-container").style.transition = "0.5s";
      }
    }
  }

  // drop down function
  document.querySelector('.dropdown-toggle').addEventListener('click', function(e) {
    e.preventDefault();
    const submenu = document.querySelector('.sub-menu');
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
});

document.addEventListener('click', function(e) {
    if (!document.querySelector('.my-dash').contains(e.target)) {
        document.querySelector('.sub-menu').style.display = 'none';
    }
});