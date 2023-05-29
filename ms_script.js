function saveScholarships() {
  for (let i = 0; i < 51; i++) {
    var nameOfId = "c" + String(i+1);
    if (document.getElementById(nameOfId).checked == true) {
      var b = document.getElementsByTagName("table").rows[i];
      var b = document.getElementsByClassName("scholarshiplistdirectory").rows[i];
      b.style.backgroundColor = "red";
    }
  }
}