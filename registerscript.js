var section1 = document.getElementById("section1");
var section3 = document.getElementById("section3");
section1.addEventListener('click', fun1);
// section3.addEventListener('click', fun3);
function fun1(event) {
  document.getElementById("main").innerHTML = `    <div id="detailscontainer" class="detailscontainer">
    <div id="filldetails" class="filldetails">
      <form id="form1" action="register.php" method="post" enctype="multipart/form-data">
        <label for="fname">First Name :</label><br />
        <input id="fname" type="text" name="fname" /><br />
        <label for="lname">Last Name :</label><br />
        <input id="lname" type="text" name="lname" /><br />
        <label for="userid">User ID :</label><br />
        <input id="userid" type="text" name="userid" /><br />
        <label for="password">Password :</label><br />
        <input id="password" type="password" name="password" />
        <div class="form-input">
        <div class="preview">
        <img id="file-ip-1-preview">

        </div>
          <label id="selectimage" for="file-ip-1"  >Select Image</label>
          <input type="file" name="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
          </div>

        <input id="submit" type="submit" name="submit">
      </form>
    </div>
  </div>`;
}

//upload image for only

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
  //upload image for only