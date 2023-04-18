/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
/*------------COPY FOR HEADER----------*/
function Show() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".links");

    burger.addEventListener("click",()=>{
      nav.classList.toggle("links-active");

    });
  }

Show();