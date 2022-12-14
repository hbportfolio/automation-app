// Tabs

let tabs = document.querySelectorAll('.tabs-toggle'),
    contents = document.querySelectorAll('.tabs-content');

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    contents.forEach((content) => {
      content.classList.remove('is-active');
    });
    tabs.forEach((tab) => {
      tab.classList.remove('is-active');
    });
    contents[index].classList.add('is-active');
    tabs[index].classList.add('is-active');
  });
});

// Newsletter popup

var is_modal_show = sessionStorage.getItem('alreadyShow');

if(document.getElementById('newsletter-error')) {
  var t = setTimeout(showPopUp, 0);
} else {
  if(is_modal_show != 'alredy shown') {
    var t = setTimeout(showPopUp, 5000);
  }
}

function showPopUp() {
  var x = document.getElementById("newsletter-container");
  x.classList.remove('close-popup');
  document.getElementById("newsletter-button").setAttribute("onClick", "closePopUp()");

  var y = document.getElementById("newsletter-button-icon");
  y.classList.remove('close-popup');
  sessionStorage.setItem('alreadyShow','alredy shown');
}

function closePopUp() {
  var x = document.getElementById("newsletter-container");
  x.classList.add('close-popup');
  document.getElementById("newsletter-button").setAttribute("onClick", "showPopUp()");

  var y = document.getElementById("newsletter-button-icon");
  y.classList.add('close-popup');
}

// Dropdown

function showDropdown() {
  var button = document.getElementById("dropdown-button");
  button.setAttribute("onClick", "closeDropdown()");
  
  var dropdown = document.getElementById("dropdown");
  dropdown.classList.remove('close-dropdown');

}

function closeDropdown() {
  var button = document.getElementById("dropdown-button");
  button.setAttribute("onClick", "showDropdown()");

  var dropdown = document.getElementById("dropdown");
  dropdown.classList.add('close-dropdown');

}