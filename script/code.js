function notify() {
  alert("please Sign In to add new restaurant details.");
}

document.getElementById("show-alert").addEventListener("click", function() {
    document.getElementById("alert-box").style.display = "block";
  });
  
  document.getElementById("cancel-alert").addEventListener("click", function() {
    document.getElementById("alert-box").style.display = "none";
  });
  