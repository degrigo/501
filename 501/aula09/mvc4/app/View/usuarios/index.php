<h2>Lista Usuários</h2>

<a href="?r=usuarios/new">Novo Usuário</a>
<ul>
	<?php foreach($usuarios as $usuario): ?>
		<li><?= $usuario->getNome() ?></li>
	<?php endforeach; ?>
</ul>