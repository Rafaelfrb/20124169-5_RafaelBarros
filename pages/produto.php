<style>
    .prod-cl {
        width: 50%;
    }
    .prod-cr {
        width: 50%;
    }
    .prod-cl img{
        width: 300px;
        height: 300px;
        border-radius: 150px;
    }
    .preco-unidade {
        font-size: 16px;
    }
    .button {
        text-decoration: none;
        color: #FFF;
        background-color: #FFAD93;
        padding: 12px;
        font-weight: bold;
        border-radius: 7px;
    }
</style>

<?php
    require_once('dados/produtos.php');

    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if(!isset($produtos[$id]))
        $id = null;
    }
        

    if(is_null($id)){
        ?>
    <div>
        Código nulo ou inexistente.
    </div>
        <?php
    }else{
?>
    <div class="prod-cl">
        <img src="images/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
    </div>
    <div class="prod-cr">
<h1><?php echo $produtos[$id]['nome'] ?></h1>
<h2><?php echo "R$ ".number_format($produtos[$id]['preco'],2, ",", ".") ?> <span class="preco-unidade">/unidade</span></h2>
<p>
        <?php echo $produtos[$id]['descricao']?>
</p>
<a href="index.php?page=contato" class="button">
    Peça agora
</a>
    </div>
<?php
    }
?>



    