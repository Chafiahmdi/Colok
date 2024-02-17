/*
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

*/

function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url('+e.target.result +')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url('+e.target.result +')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});

function poutpout(){
  input = document.getElementById('imageFile')
  input.click();
 
}


let imageFile = document.getElementById('imageFile');
    let blah = document.getElementById('blah');
    let blah2 = document.getElementById('blah2');
  

    imageFile.onchange = evt => {
        const file = imageFile.files[0];
        if (file) {
            blah.src = URL.createObjectURL(file);
            blah2.src = URL.createObjectURL(file);
            // Cacher l'icône lorsque l'image est téléchargée
            document.querySelector('.circle-container label i').style.display = 'none';
        } else {
            // Afficher l'icône si aucun fichier n'est sélectionné
            document.querySelector('.circle-container label i').style.display = 'block';
        }
    } 

