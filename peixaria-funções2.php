<?php
/*O código irá analisar cada item no estoque para verificar 
se o mesmo contém muita ou pouca unidades para ser colocado 
em promoção, se possível se baseando nos dias também.*/

echo "Quais os peixes que se encontram em promoção de acordo com a quantidade e a data que foi colocado no estoque?".PHP_EOL;

$stock = [
    [
        'name' => 'tilápia',
        'quantity' => 89,
        'days' => 5
    ],
    [
        'name' => 'sardinha',
        'quantity' => 88,
        'days' => 2
    ],
    [
        'name' => 'pirarucu',
        'quantity' => 14,
        'days' => 1
    ],
    [
        'name' => 'salmão',
        'quantity' => 95,
        'days' => 35
    ],
    [
        'name' => 'atum',
        'quantity' => 42,
        'days' => 44
    ]

];

$sale = [];
//função para analisar cada componente do objeto, se o mesmo cumpre os requisitos da condição
function verify($fish){
    if($fish['quantity'] < 30 && $fish['days'] > 70){
        return $fish;
    } else {
        false;
    }
}
//serve para pegar o resultado que corresponder a condição e guardar dentro da array '$sale'
foreach($stock as $fish){
    $resultado = verify($fish);
    if($resultado){
        array_push($sale, $fish);
    }
};
//condição para mostrar a mensagem das condições correspondentes 
if(count($sale) > 0){
    echo 'Promoção de '.$sale[0]['name'].', 40% de desconto!!';
} else {
    echo "Não há nenhuma promoção no momento, mas aproveita que ta tudo fresco!!";
};