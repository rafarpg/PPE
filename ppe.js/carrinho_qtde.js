function dimQuantidade() {
    var quantityElement = document.getElementById("quantidade");
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
      quantityElement.innerText = currentQuantity - 1;
    }
  }

  function aumQuantidade() {
    var quantityElement = document.getElementById("quantidade");
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
  }
  function dimQuantidade2() {
  var quantityElement = document.getElementById("quantidade2");
  var currentQuantity = parseInt(quantityElement.innerText);
  if (currentQuantity > 0) {
    quantityElement.innerText = currentQuantity - 1;
  }
}

function aumQuantidade2() {
  var quantityElement = document.getElementById("quantidade2");
  var currentQuantity = parseInt(quantityElement.innerText);
  quantityElement.innerText = currentQuantity + 1;
}
function dimQuantidade3() {
    var quantityElement = document.getElementById("quantidade3");
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
      quantityElement.innerText = currentQuantity - 1;
    }
  }
  
  function aumQuantidade3() {
    var quantityElement = document.getElementById("quantidade3");
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
  }
  function dimQuantidade4() {
    var quantityElement = document.getElementById("quantidade4");
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
      quantityElement.innerText = currentQuantity - 1;
    }
  }
  
  function aumQuantidade4() {
    var quantityElement = document.getElementById("quantidade4");
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
  }
  function dimQuantidade5() {
    var quantityElement = document.getElementById("quantidade5");
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
      quantityElement.innerText = currentQuantity - 1;
    }
  }
  
  function aumQuantidade5() {
    var quantityElement = document.getElementById("quantidade5");
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
  }
  function dimQuantidade6() {
    var quantityElement = document.getElementById("quantidade6");
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
      quantityElement.innerText = currentQuantity - 1;
    }
  }
  
  function aumQuantidade6() {
    var quantityElement = document.getElementById("quantidade6");
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
  }
  function dimQuantidade7() {
    var quantityElement = document.getElementById("quantidade7");
    var currentQuantity = parseInt(quantityElement.innerText);
    if (currentQuantity > 0) {
      quantityElement.innerText = currentQuantity - 1;
    }
  }
  
  function aumQuantidade7() {
    var quantityElement = document.getElementById("quantidade7");
    var currentQuantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = currentQuantity + 1;
  }
  function Remove()
  {
    var quantidadeElement = document.getElementById("quantidade");
    quantidadeElement.textContent = "0";
  }
  function Remove2()
  {
    var quantidadeElement = document.getElementById("quantidade2");
    quantidadeElement.textContent = "0";
  }
  function Remove3()
  {
    var quantidadeElement = document.getElementById("quantidade3");
    quantidadeElement.textContent = "0";
  }
  function Remove4()
  {
    var quantidadeElement = document.getElementById("quantidade4");
    quantidadeElement.textContent = "0";
  }
  function Remove5()
  {
    var quantidadeElement = document.getElementById("quantidade5");
    quantidadeElement.textContent = "0";
  }
  function Remove6()
  {
    var quantidadeElement = document.getElementById("quantidade6");
    quantidadeElement.textContent = "0";
  }
  function Remove7()
  {
    var quantidadeElement = document.getElementById("quantidade7");
    quantidadeElement.textContent = "0";
  }
  








  function updateTotal(row) {
    var priceElement = row.querySelector('td:nth-child(2)');
    var totalElement = row.querySelector('td:nth-child(4)');
    var price = parseFloat(priceElement.textContent.replace('R$', ''));
    var quantityElement = row.querySelector('.qtde span');
    var quantity = parseInt(quantityElement.textContent);
    var total = price * quantity;
    totalElement.textContent = 'R$' + total.toFixed(2);
    atualizarResumoCompra();
  }

  function aumQuantidade(id) {
    var quantityElement = document.getElementById('quantidade' + id);
    var quantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = quantity + 1;
    var row = quantityElement.closest('tr');
    updateTotal(row);
  }

  function dimQuantidade(id) {
    var quantityElement = document.getElementById('quantidade' + id);
    var quantity = parseInt(quantityElement.textContent);
    if (quantity > 0) {
      quantityElement.textContent = quantity - 1;
      var row = quantityElement.closest('tr');
      updateTotal(row);
    }
  }

  function Remove(id) {
    var row = document.getElementById('quantidade' + id).closest('tr');
    row.remove();
    atualizarResumoCompra();
  }

  function atualizarResumoCompra() {
    var rows = document.querySelectorAll('tbody tr');
    var totalCompra = 0;

    rows.forEach(function (row) {
      var totalElement = row.querySelector('td:nth-child(4)');
      var total = parseFloat(totalElement.textContent.replace('R$', ''));
      if (!isNaN(total)) {
        totalCompra += total;
      }
    });

    var totalResumoElement = document.querySelector('.box footer span:last-child');
    totalResumoElement.textContent = 'R$' + totalCompra.toFixed(2);
  }