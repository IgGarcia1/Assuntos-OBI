<?php include("./cabecalho.php");?>

<div class="container" id="pagina">
    <br/>
    <h1>Dicionário</h1>
    <br/>
    <div class="explicacao">
        <p>"Dicionários seguem o conceito de que cada item, ou seja, cada <em>chave</em> inserida deve ter um <em>valor</em> correspondente. Em python esses valores podem ser de qualquer tipo e até mesmo outra estrutura de dados."</p>
        <!--br/-->
    </div>
    <div class="container">
        <br>
        <h3>Operações com dicionário em Python 3</h3> <br/>

        <ul>
            <li> <!-- Criando dic -->
                <span>Criando um dicionário</span> <br> <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark">

meu_dicionario = {}
</pre>
                </div> <br>
            </li>
            <li> <!--  adicionando valores-->
                <span>Adicionando valores</span> <br> <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark">

meu_dicionario["chave01"] = "valor01"
meu_dicionario[4] = "quatro"
meu_dicionario['chave02'] = 1000
</pre>
                </div> <br>
            </li>
            <li> <!--  atualizando valores-->
                <span>Atualizando valores</span> <br> <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark">

meu_dicionario[chaveDesejada] = "novo valor"
</pre>
                </div><br>
            </li>
            <li> <!--  deletando valores-->
                <span>Deletando valores</span> <br> <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark">

del(meu_dicionario[chave_a_ser_excluida])
</pre>
                </div> <br>
            </li>
            <li> <!--  lendo valores-->
                <span>Lendo valores</span> <br> <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark">

meu_dicionario['chave_a_ser_buscada']
</pre>
                </div> <br>
            </li>
        </ul>

    </div>

    <hr>

    <div class="container">

        <h3>Exercícios em Python 3</h3>
        <br/>

        <p> Temos o seguinte desafio: Inicialmente será dado uma palavra qualquer e um inteiro N. Em seguida, serão informadas N linhas, cada uma, 
        contendo uma letra e um número (Separados por um espaço em branco), esse número representará o valor da letra informada. Seu dever é determinar 
        o valor total da palavra. Se houverem letras na palavra que não tenha valores informados, o zero deve ser adotado.
        </p>
        <br>
        <div class="comparacaoCodigos">

            <div class="dark-theme codigo container" id="semDicionario">
                <pre class="codigo-dark">
#<h6 class="identificador">Código sem dicionário</h6><br/>
palavra = input().strip()
letras = []
valores = [] 
for i in range(int(input())):
    entrada = list(map(str, input().split()))
    letras.append(entrada[0])
    valores.append(entrada[1])

soma = 0
for item in palavra:
    if item in letras:
        soma+=int(valores[letras.index(item)])
print(soma)
                </pre>
            </div>
        
            <div class="dark-theme codigo container" id="comDicionario">
                <pre class="codigo-dark">
#<h6 class="identificador">Código com dicionário</h6><br/>
palavra = input().strip()
dicionario = {}
for i in range(int(input())):
    entrada = list(map(str, input().split()))
    dicionario[entrada[0]] = entrada[1] 

soma = 0
for item in palavra:
    if item in dicionario:
        soma += int( dicionario[item])
print(soma)


                </pre>
            </div>

        </div>

    </div>

</div>

<?php include("./rodape.php");?>
