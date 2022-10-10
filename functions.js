function WrongPassword() {
  swal.fire({
      title: "Error!",
      text: "Usuario o Password Inválidos!",
      type: "error",
      icon: "error",
  }).then(function () {
      window.location = "../index.php";
  });
}

//Alerta Familiar creado
function familiarCreado() {
  swal.fire({
      title: "Familiar Creado!!!",
      type: "success",
      icon: "success",
  }).then(function () {
      window.location = "../view/familiares.php";
  });
}