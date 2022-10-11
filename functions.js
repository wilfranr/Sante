//alerta password incorrecto
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

//alerta familiar ya existe
function familiarYaExiste() {
  swal.fire({
      title: "Error!",
      text: "El familiar ya existe!",
      type: "error",
      icon: "error",
  }).then(function back() {
    history.back();
});
}

//alerta familiar eliminado
function familiarEliminado() {
  swal.fire({
      title: "Familiar Eliminado!!!",
      type: "success",
      icon: "success",
  }).then(function () {
      window.location = "../view/familiares.php";
  });
}

//alerta familiar modificado
function familiarModificado() {
  swal.fire({
      title: "Familiar Modificado!!!",
      type: "success",
      icon: "success",
  }).then(function () {
      window.location = "../view/familiares.php";
  });
}
//alerta de registro creado
function registroCreado() {
  swal.fire({
      title: "Registro Creado!!!",
      type: "success",
      icon: "success",
  }).then(function () {
      window.location = "../view/estadisticas.php";
  });
}
//alerta para registro de salud propio
function registroSaludPropio() {
Swal.fire('Si desea crear su propio estado de salud, en parentesco seleccione "Yo" y en el campo de nombre escriba su nombre y apellido.')
}