<html>
<head>
	
</head>
<body>
Nome:	<?= $produto['nome']?><br>
Preço:	<?= $produto['preco']?><br>
Descrição:	<?= $produto['descricao']?><br>

<?= anchor("produtos/index", "Voltar", array('class' => 'btn btn-primary')); ?>
<a href="<?= base_url('index.php/produtos/delete/'.$produto['id']); ?>" class="btn btn-danger">Deletar Produto</a>
<a href="<?= base_url('index.php/produtos/editar?id='.$produto['id']); ?>" class="btn btn-info">Editar</a>


</body>
</html>