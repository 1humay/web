/*copy my mail*/
function myFunction() { 
    navigator.clipboard.writeText("khalilova@outlook.de");
  }
  /*navigation bar*/
  /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").style.opacity = 0.5;
    document.getElementById("open").style.opacity = 0;
    document.getElementById("open").style.left = "400px";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0"; 
    document.getElementById("main").style.opacity = 1;
    document.getElementById("open").style.opacity = 1;
    document.getElementById("open").style.left = "20px";
  }
  
  
  
  /* modal had to stay in photography.html*/
  
  
  
  //Schubladen für pflanzen auch
  