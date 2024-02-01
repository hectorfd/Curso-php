setInterval(function() {
    var d = new Date();
    var hora = d.getHours();
    var minutos = d.getMinutes();
    var segundos = d.getSeconds();
    var horaActual = hora + ":" + minutos + ":" + segundos;
    document.getElementById("hora").value = horaActual;
  }, 1000);
  
