function validateForm() {
    // Récupère les valeurs des champs du formulaire
    var name = document.forms["myForm"]["login"].value;
    var firstName = document.forms["myForm"]["password"].value;
  
  
    // Vérifie si les champs sont vides
    if ( login == "" || password == "" ) {
      alert("Tous les champs doivent être remplis");
      return false;
    }
  
    // Vérifie si le nom ne contient que des lettres et des espaces
    if (!/^[a-zA-Z ]+$/.test(login)) {
      alert("Le nom ne peut contenir que des lettres et des espaces");
      return false;
    }
  
   
    // Vérifie si le mot de passe est assez long
    if (password.length < 8) {
      alert("Le mot de passe doit contenir au moins 8 caractères");
      return false;
    }
  

  }
  /*function validateFile() {
    var fileInput = document.getElementById("myFile");
    if (fileInput.files.length == 0) {
      alert("Vous devez choisir un fichier");
      return false;
    }
    return true;
  }*/