function validarFormulario(event) {
    event.preventDefault();
  
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('exampleInputApellidos').value;
    let telefono = document.getElementById('exampleInputtelefono').value;
  
    let regexNoNumeros = /^[^\d@]+$/;
    let regexNoLetras = /^[^a-zA-Z@]+$/;
  
    if (!regexNoNumeros.test(nombre) || !regexNoNumeros.test(apellidos)) {
      alert('El campo de nombre y apellidos no debe contener caracteres numéricos ni "@"');
      return false;
    }
  
    if (!regexNoLetras.test(telefono)) {
      alert('El campo de teléfono no debe contener letras ni "@"');
      return false;
    }
  
    let form = document.getElementById('formulario');
    form.action = 'https://formsubmit.co/chalo1992@hotmail.com';
    form.submit();
  }
  