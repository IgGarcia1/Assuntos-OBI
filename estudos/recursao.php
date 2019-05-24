<?php include("./cabecalho.php");?>

    <div class="container" id="pagina">

        <h1>Recursão</h1>
        <br/>
        <div class="explicacao">
            <p>"Recursão, em programação, é quando um procedimento que precisa recorrer a si mesmo um número indeterminado de vezes.
                Ou seja, é uma maneira de quebrar um problema em sub-problemas até que se cheguem em um ponto que dê para resolver sem grandes complicações."</p>
        </div>
        <br/>
        <div class="container">
            <h3>Vantagens e Desvantagens</h3> <br/>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Desvantagens</th>
                        <th>Vantagens</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Requer mais memória</td>
                        <td>Produz soluções mais robustas e simplificadas.</td>
                    </tr>
                    <tr>
                        <td>Dependendo de como for implementada, pode requerer maior tempo de execução</td>
                        <td>Diminui quantia de código, em problemas mais complexos.</td>
                    </tr>
                </tbody>
            </table>
            <br/>
        </div>

        <div class="container">

            <h3>Condições de existência</h3> <br/>

            <span>Para formar uma recursão, por obrigação, é necessários ter as seguintes características:</span>
            <br/><br/>
            <ol>
                <li>O procedimento deve chamar a si mesmo em seu código.</li>
                <li>Deve haver pelo menos uma condição de quebra, caso contrário, o script entrará em loop infinito.</li>
            </ol>

        </div>

        <hr>
        <div>
            <h3>Exemplos práticos em Python 3</h3>
            <br/>
            <ul>
                <li>
                    <span class="titulo">Somando itens de uma lista</span>
                    <br/><br/>
                    <span>Desejamos somar todos os itens da lista [1, 2, 3, 4, 5]. Em ambos os códigos teremos "15" como resultado</span>
                    <br><br>
                    <div class="comparacaoCodigos">
                        <div class="dark-theme codigo container" id="semRecursao">
                            <pre class="codigo-dark">
#<h6 class="identificador">Código sem recursão</h6>
<br/>
def somaItensLista(lista):
    soma = 0
    for numero in lista:
        soma += numero
    return soma
                            </pre>
                        </div>
                        <div class="dark-theme codigo container" id="comRecursao">
                            <pre class="codigo-dark">
#<h6 class="identificador">Código com recursão</h6>
<br/>
def somaItensLista(lista, c = 0):
    if c == len(lista):
        return 0
    else:
        return lista[c] + somaItensLista(lista, c+1)
                            </pre>
                        </div>
                    </div><br/>
                </li>
                <li>
                    <span class="titulo">Calculando fatorial</span>
                    <br/>
                    <br/>
                    <span>O fatorial de um número é o resultado da multiplicação desse número com todos os anteriores que sejam naturais. Em ambos os códigos teremos "3628800" como fatorial de 10</span>
                    <br><br>
                    <div class="comparacaoCodigos">
                        <div class="dark-theme codigo container" id="semRecursao">
                            <pre class="codigo-dark">
#<h6 class="identificador">Código sem recursão</h6>
<br/>
def calculaFatorial(numero):
    resultado = 1
    for i in range(1, numero+1):
        resultado *= i
    return resultado
                            </pre>
                        </div>
                        <div class="dark-theme codigo container" id="comRecursao">
                            <pre class="codigo-dark">
#<h6 class="identificador">Código com recursão</h6>
<br/>
def calculaFatorial(numero):
    if numero == 0 or numero == 1:
        return 1
    else:
        return numero * calculaFatorial(numero-1)
                            </pre>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<?php include("./rodape.php")?>
