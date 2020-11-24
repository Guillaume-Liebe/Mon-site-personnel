var clic_1 = document.getElementById('bouton_moins')

clic_1.addEventListener('click', function () {
  document.getElementById('informations')
  informations.style.visibility = 'hidden';
  document.getElementById('bouton_moins')
  bouton_moins.style.visibility = 'hidden';
  document.getElementById('bouton_plus')
  bouton_plus.style.visibility = 'visible';
})

var clic_2 = document.getElementById('bouton_plus')

clic_2.addEventListener('click', function () {
  document.getElementById('informations')
  informations.style.visibility = 'visible';
  document.getElementById('bouton_moins')
  bouton_moins.style.visibility = 'visible';
  document.getElementById('bouton_plus')
  bouton_plus.style.visibility = 'hidden';
})