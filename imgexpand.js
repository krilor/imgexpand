
// Jquery version
// $(".imgextend").click( function(){ $(this).toggleClass("extended"); });

var imgextends = document.getElementsByClassName("imgextend");

var toggleExtended = function() {
  var toggleClass = 'extended';
  var currentClass = this.className;
  if (currentClass.split(" ").indexOf(toggleClass) > -1) { //has class
    newClass = currentClass.replace(new RegExp('\\b' + toggleClass + '\\b', 'g'), "")
  } else {
    newClass = currentClass + " " + toggleClass;
  }
  this.className = newClass.trim();
};

for (var i = 0; i < imgextends.length; i++) {
  imgextends[i].addEventListener('click', toggleExtended, false);
}
