<?php
#echo the 'imports'
echo $this->Html->css('nti');
echo $this->Html->script('vendor');
echo $this->Html->script('nti');

$pageNames = array(
    [
        "caminho" => "/pages",
        "nome"    => "Inicio",
        "icone"   => "home"
    ],
    [
        "caminho" => "/affiliates",
        "nome" => "Filiados",
        "icone" => "users"
    ],
    [
        "caminho" => "/reports",
        "nome" => "Relatórios",
        "icone" => "list"
    ],
    [
        "caminho" => "/actions",
        "nome" => "Ações",
        "icone" => "list"
    ],
    [
        "caminho" => "/contributions",
        "nome" => "Contribuições",
        "icone" => "list"
    ]
);
#Constroi cada item da barra lateral
echo '<aside class="menu-sidebar with-navbar slide horizontal " style="position:absolute;margin-bottom:50px">';
foreach ($pageNames as $key => $value){
    #Verifica qual é o item ativo
    if(strtolower($this->name) === strtolower($value['caminho'])){
        echo '
        <a href="#" class="list-group-item text-center active">
            <i class="fa fa-'.$value['icone'].' fa-lg"></i>'.$value['nome'].'
        </a>'
        ;
    }
    else{
        echo '
        <a href="'.$value['caminho'].'" class="list-group-item text-center">
            <i class="fa fa-'.$value['icone'].' fa-lg"></i>'.$value['nome'].'
        </a>'
        ;
    }
}
echo '</aside>';
?>
