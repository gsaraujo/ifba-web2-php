<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cardápio de Hambúrguer</title>
</head>
<body>
<h1>Nosso Cardápio</h1>
<ul>
    <?php foreach ($hamburguers as $h): ?>
        <li><?php echo $h->getNome(); ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>