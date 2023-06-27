// Obtendo os elementos relevantes da página
const txtBusca = document.getElementById('txtBusca');
const produtos = document.querySelectorAll('section');

// Obtendo os valores dos elementos e armazenando-os no localStorage
function salvarDados() {
  const dados = {
    busca: txtBusca.value,
    produtos: []
  };

  produtos.forEach((produto, index) => {
    const nome = produto.querySelector('h3').textContent;
    const preco = produto.querySelector('p').textContent;
    const imagem = produto.querySelector('img').getAttribute('src');

    dados.produtos.push({
      id: index + 1,
      nome,
      preco,
      imagem
    });
  });

  localStorage.setItem('dadosPagina', JSON.stringify(dados));
}
// Chamando a função para salvar os dados
salvarDados();