var choosebutton = document.getElementById("section1");
choosebutton.addEventListener('click', fun1);


function fun1() {
  document.getElementById('uploaddate').click();
}


function showPreview(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
    document.getElementById('selectimage').style.display = "none";
    document.getElementById('submitphoto').style.display = "block";
  }
}