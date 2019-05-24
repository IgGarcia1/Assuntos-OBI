<?php include("./cabecalho.php");?>

<div class="container" id="pagina">
    <br/>
    <h1>Dicionário</h1>
    <br/>
    <div class="explicacao">
        <p>"Dicionários seguem o conceito de que cada item, ou seja, cada <em>chave</em> inserida deve ter um <em>valor</em> correspondente. Em python esses valores podem ser de qualquer tipo e até mesmo outra estrutura de dados."</p>
        <br/>
    </div>
    <div class="container">
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

        <h3>Exercicios em Python 3</h3>



    </div>

</div>

<?php include("./rodape.php");?>
