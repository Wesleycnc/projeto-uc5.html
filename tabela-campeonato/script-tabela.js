var times = [
    {nome:"Flamengo", pts:0}, {nome:"Palmeiras", pts:0}, {nome:"Santos", pts:0},
    {nome:"Vasco", pts:0}, {nome:"Botafogo", pts:0},{nome:"Fluminense", pts:0},
    {nome:"Corinthians", pts:0},{nome:"Sao Paulo", pts:0},{nome:"Atletico-MG", pts:0},
    {nome:"Atletico-PR", pts:0},{nome:"Gremio", pts:0},{nome:"Internacional", pts:0},
    {nome:"Chapecoense", pts:0},{nome:"Avai", pts:0},{nome:"Bahia", pts:0},
    {nome:"Ceara", pts:0},{nome:"Fortaleza", pts:0},{nome:"Goias", pts:0},
    {nome:"CSA", pts:0},{nome:"Cruzeiro", pts:0}
    ];

//Pego o elemento (select) para poder manipular
var time1 = document.getElementById('time1');
//Pego o elemento (select) para poder manipular
var time2 = document.getElementById('time2');
//Pego o elemento (tbody) da tabela para poder inserir as linhas
var linha = document.getElementById("myTable").innerHTML;


//Chamo a função para carrgar os select's
carregarCombobox(times);

//Chamo a função para carregar a tabela com as informações zeradas
//Coloco dentro <tbody> o conteúdo da LINHA
//A função carregarTabela retorna LINHA
document.getElementById("myTable").innerHTML = carregarTabela(times, linha);

//Função para tratar dos resultados dos jogos e ordenação dos times por pontuação
//Executado pelo input submit onclick
function resultado() {

//Zero minha tabela (<tr> e <td> dentro de <tbody>)
document.getElementById("myTable").innerHTML = '';
//Pego novamente <tbody> para atualizar a tabela
var row = document.getElementById("myTable").innerHTML;

//Pego valor do placar1
var p1 = document.getElementById('pla1').value;
//Pego valor do placar2
var p2 = document.getElementById('pla2').value;

//Pego valor do select 1
var t1 = document.getElementById('time1').value;
//Pego valor do select 2
var t2 = document.getElementById('time2').value;

//Aqui faço a lógica de pontuação
if(p1 > p2) {
    times[t1]['pts'] += 3;
} else if(p2 > p1) {
    times[t2]['pts'] += 3;
} else if(p1 == p2) {
    times[t1]['pts'] += 1;
    times[t2]['pts'] += 1;
}

document.getElementById("myTable").innerHTML = "";

/* usei apenas para testes
console.log(p1);
console.log(p2);
console.log(times[t1]['nome']+": "+times[t1]['pts']);
console.log(times[t2]['nome']+": "+times[t2]['pts']);
*/

//Chamo o método sort() passando como parâmetro a função comparePontos
times.sort(comparePontos);

//Recarrego o select reordanado
carregarCombobox(times);

//Atualizo minha tabela
document.getElementById("myTable").innerHTML = carregarTabela(times, row);
}

function carregarTabela(lista, rows) {
//Carrego minha tabela sem nenhuma pontuação logo de primeira
for(var i = 0; i < lista.length; i++) {
    if(i < 4) {
        rows += "<tr><td class='table-light'>"+(i+1)+"</td>"+
                "<td id='col-name' class='table-primary'>"+lista[i]['nome']+"</td><td id='col-pt' class='table-secondary'>"+lista[i]['pts']+"</td>"
            +"</tr>";
    } else if(i > 3 && i < 6) {
        rows += "<tr><td class='table-light'>"+(i+1)+"</td>"+
                "<td id='col-name' class='table-warning'>"+lista[i]['nome']+"</td><td id='col-pt' class='table-secondary'>"+lista[i]['pts']+"</td>"
            +"</tr>";
    } else if(i > 5 && i < 16 ) {
        rows += "<tr><td class='table-light'>"+(i+1)+"</td>"+
                "<td id='col-name' class='table-success'>"+lista[i]['nome']+"</td><td id='col-pt'class='table-secondary'>"+lista[i]['pts']+"</td>"
            +"</tr>";
    } else {
        rows += "<tr><td class='table-light'>"+(i+1)+"</td>"+
                "<td id='col-name' class='table-danger'>"+lista[i]['nome']+"</td><td id='col-pt' class='table-secondary'>"+lista[i]['pts']+"</td>"
            +"</tr>";
    }
    
}

return rows;
}

//Tem o objetivo de carregar as tags select's
//recendo como parâmtro a minha lista (times)
function carregarCombobox(lista) {

//serve para apagar as informa dentro do select
//e recarregá-los novamente
document.getElementById('time1').innerHTML = '';
document.getElementById('time2').innerHTML = '';

//carrego o primeiro select
for(t in lista) {
    option = new Option(times[t]['nome'], t);
    time1.options[time1.options.length] = option;

}

//carrego o segundo select
for(t in lista) {
    option = new Option(times[t]['nome'], t);
    time2.options[time2.options.length] = option;
    
}
}

/*Função de ordenação por ordem alfabética*/
function compareNome(a,  b) {
if (a.nome < b.nome)
    return -1;
  if (a.nome > b.nome)
    return 1;
  return 0;
}

/*Função de ordenação por pontos em ordem descrecente,
para fica em ordem crescente basta inverte os sinas de 'maior que' e 'menor que'
dentro dos Ifs*/
function comparePontos(a,  b) {
if (a.pts > b.pts) //a.pts significa que estou pegando a propriedade PONTOS da minha lista "times"
    return -1;
  if (a.pts < b.pts)
    return 1;
  return 0;
}