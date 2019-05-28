<?include("./cabecalho.php");?>

<div class="container">
    <br>
    <div class="explicacao">
        <p>Matrizes são estruturas de dados bidimensional. Que assim como em matemática, consideramos como linhas e colunas.</p>
    </div>
    
    <br>
    <br>

    <div>
        <figure class="ilustracao">
            <img src="./image/matriz.gif" alt="Imagem de matriz" class="img-fluid" width="500px;" height="auto">
            <figcaption> Ilustração de uma matriz em matemática.</figcaption>
        </figure>
    </div>
    <br>
    <br>

    <div>
        <h3>Matrizes em Python 3</h3>
        <br>
        <p>Em python, as matrizes são listas que contém outras listas como seus itens. Sendo assim, seguem os mesmos princípios de listas.</p>
        <br>
        <em>Representacação de matriz em python.</em>
        <div class="dark-theme codigo container">
            <pre class="codigo-dark">

[ [1, 4, -7],
  [2, 3, -3],
  [0, 0, -5]
]
</pre>
        </div>
    </div>
    <br><br>
    <div class="container">
        <h4>Operações com matrizes</h4>
        <br>
        <ul>
            <li> Criação de uma matriz.
                <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark"> 
matriz = []
</pre> 
                </div>
                <br>
            </li>
            <li>
                Adicionando item
                <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark"> 
matriz[indice_linha].append(item_desejado)
matriz[0].append(1)         # Resultado: matriz = [ [1] ]
matriz.append([2])          # Resultado: matriz = [ [1], [2]]
matriz[0].append(3)         # Resultado: matriz = [ [1, 3], [2]]
</pre> 
                </div>
                <br>
            </li>
            <li>
                Atualizando valores
                <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark"> 
matriz[indice_linha][indice_coluna] = novo_valor        #Atualiza um único item na matriz
matriz[indice_linha] = novo_valor                       # Substitui a linha inteira para o novo valor.
</pre> 
                </div>
                <br>
            </li>
            <li>
                Consultando valores
                <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark"> 
print(matriz[linha][coluna])
</pre> 
                </div>
                <br>
            </li>
            <li>
                Deletando valores
                <br>
                <div class="dark-theme codigo container">
                    <pre class="codigo-dark"> 
del(matriz[linha][coluna])      #Deleta um único item 
del(matriz[linha])              #Deleta linha completa
del(matriz)                     #Deleta matriz completa 
</pre> 
                </div>
                <br>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <div>
        <h3>Exercícios resolvidos.</h3>
        <br>
        <p>
            Sr. Zé tem uma fazenda produtora de grãos e costuma produzir grandes quantias. No entanto, gostaria de ter um controle maior sobre sua 
            produção, para isso, desenvolveu um sistema manual onde tendo uma planilha de NxN ele anota os resultados da produção obtida em comparação com 
            o esperado em cada lote. Por exemplo, se no lote de posição 1x1 ele esperava 100 kg e só foi produzido 70kg então ele anota -30, pois foi o prejuízo que teve.
            Agora se a produção supera o esperado ele anota o excedente. Se produz o esperado ele anota zero. Seu dever é indicar quais lotes deram não produziram como esperado.
        </p>
        <br>
        <div style="display: block; margin-left: auto; margin-right: auto; width: 300px; height: auto;">
            <span> A planilha montada ficaria nesse modelo. </span><br>
            <img src="./image/lotesProblema.png" alt="Ilustração do problema" class="img-fluid" >
        </div>
        <br><br>

        <div>
            <H5>Solução utilizando matrizes.</H5>
            <div class="dark-theme codigo container">
                <pre class="codigo-dark"> 
matriz_lotes = []
n = int(input())

# POPULANDO MATRIZ CRIADA 

for x in range(n):
    linha = list(map(int, input().split()))
    matriz_lotes.append(linha)

# LENDO MATRIZ  E IMPRIMINDO RESULTADOS

c_linhas = 0 
c_colunas = 0
while c_linhas < n:

    while c_colunas < n:
        if matriz_lotes[c_linhas][c_colunas] < 0:
            print("Lote: {}x{}".format(c_linhas, c_colunas))
        c_colunas+=1
    c_linhas+=1
</pre> 

            </div>
    
    </div>

</div>

<?include("./rodape.php");?>