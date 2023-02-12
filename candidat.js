function validateForm() {
    // Récupère les valeurs des champs du formulaire
    var name = document.forms["myForm"]["nom"].value;
    var firstName = document.forms["myForm"]["prenom"].value;
    var phone = document.forms["myForm"]["telephone"].value;
    var password = document.forms["myForm"]["mdp"].value;
    var email = document.forms["myForm"]["email"].value;
  
    // Vérifie si les champs sont vides
    if (name == "" || firstName == "" || phone == "" || password == "" || email == "") {
      alert("Tous les champs doivent être remplis");
      return false;
    }
  
    // Vérifie si le nom ne contient que des lettres et des espaces
    if (!/^[a-zA-Z ]+$/.test(name)) {
      alert("Le nom ne peut contenir que des lettres et des espaces");
      return false;
    }
  
    // Vérifie si le prénom ne contient que des lettres et des espaces
    if (!/^[a-zA-Z ]+$/.test(firstName)) {
      alert("Le prénom ne peut contenir que des lettres et des espaces");
      return false;
    }
  
    // Vérifie si le numéro de téléphone est valide
    if (!/^\d{10}$/.test(phone)) {
      alert("Le numéro de téléphone doit être composé de 10 chiffres");
      return false;
    }
  
    // Vérifie si le mot de passe est assez long
    if (password.length < 8) {
      alert("Le mot de passe doit contenir au moins 8 caractères");
      return false;
    }
  
    // Vérifie si l'adresse email est valide regex
    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) {
      alert("L'adresse email n'est pas valide");
      return false;
    }
  
    return true;
  }
  /*function validateFile() {
    var fileInput = document.getElementById("myFile");
    if (fileInput.files.length == 0) {
      alert("Vous devez choisir un fichier");
      return false;
    }
    return true;
  }*/