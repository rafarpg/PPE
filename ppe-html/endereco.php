<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço</title>
    <link rel="stylesheet" type="text/css" href="../ppe.css/endereco.css">
    <link rel="stylesheet" type="text/js" href="../ppe.js/menu_cor.js">
</head>
<body>
    <body>
        <div class="navegacao">
            <ul>
                <li class = "list active">
                    <a href="testemenu.html">
                        <span class="icon"><ion-icon name="menu-outline"></ion-icon></span>
                        <span class="titulo">Home</span>
                    </a>
                </li>
                <li class = "list">
                    <a href="perfil.html">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="titulo">Perfil</span>
                    </a>
                </li>
                <li class = "list">
                    <a href="suporte.html">
                        <span class="icon"><ion-icon name="logo-whatsapp"></ion-icon></span>
                        <span class="titulo">Suporte</span>
                    </a>
                </li>  
                <li class = "list">
                    <a href="produtos.html">
                        <span class="icon"><ion-icon name="construct-outline"></ion-icon></span>
                        <span class="titulo">Peças</span>
                    </a>
                </li>    
                <li class = "list">
                    <a href="tela_ja_tem_conta.html">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="titulo">Logout</span>
                    </a>
                </li> 
            </ul>
        </div>
        <div class="fundo_menu">
            <form class="box_menu">
                <input type="text" placeholder="Pesquisar" class="fundo_texto_m">
                <input type="image" id="image" alt="Login" src="../ppe.imagens/search-circle-outline.svg" class="lupa">
            </form>
        </div>
        <img src="../ppe.imagens/melhor-mountain-bike (1).png" id="minha-imagem" class= "imagem">
        <div class="fundo_tela2">        
            <form action="endereco2.php" method="post">
                <fieldset>
                <legend>Endereço de Entrega</legend>
                    <label for="cep">CEP:</label>
                    <input id="cepInput" type="text" name="cep" class="caixa" required/>
                    <label for="logradouro">Rua:</label>
                    <input id="logradouro" type="text" name="rua" class="caixa" required/>
                    <label for="numero">Número:</label>
                    <input id="numero" name="num" type="text" class="num" />
                    <label for="complemento">Complemento:</label>
                    <input id="complemento" name="complemento" type="text" class="caixa"/>
                    <label for="bairro">Bairro: </label>
                    <input id="bairro" type="text" name="bairro" class="caixa" required/>
                    <label for="cidade">Cidade: </label>
                    <input id="cidade" type="text" name="cidade" class="caixa" required/>
                    <label for="uf">Estado:</label>
                    <select id="uf" name="estado" class="caixa2" required>
                        <option value="EST">Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                </select>
                <div class="box-botao">
                <input type="submit" class="botao" name="inserir" value="Confirmar Endereço">
                </div>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
            </fieldset>
            </form>
        </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </body>
    </html>

</body>
</html>