$(document).ready(function(){
    ChargerCategories();
});

function ChargerCategories(){
    $.get("categories.php" , function(rep){
        $("#divCat").html(rep);
        $("#cats").change(function(){
            ChargerProduits($(this).val());
        });
    });
}

function ChargerProduits(idC){
    $.get("produits.php?idCat=" +idC , function(rep){
        $("#divProd").html(rep);
    });
}