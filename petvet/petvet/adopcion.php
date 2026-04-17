<?php
// Esto no lo tendramos que cambiar por include_once.
// Porque asi el contenido solo se repite una ves aunque se escriba varias veces en el codigo, no se si utilizarlo es buena practica
require_once 'includes/header.php';
require_once 'includes/animales.php';
?>

//TITULO PRICIPAL DE LA PAGINA
<div class="page-header">
    <h2>Animales en adopción</h2>
    <p>Encontrá a tu nuevo compañero de vida</p>
</div>

<section class="cards">
// Este foreach sirve para 
<?php foreach ($animales as $slug => $animal): ?>
    <article class="card">
        <div class="card-photo">
            <img
                src="<?= htmlspecialchars($animal->getFoto()) ?>"
                alt="Foto de <?= htmlspecialchars($animal->getNombre()) ?>"
                loading="lazy"
            >
            <span class="card-badge badge-<?= strtolower($animal->getEspecie()) ?>">
                <i class="fa-solid fa-<?= $animal->getEspecie() === 'Perro' ? 'dog' : 'cat' ?>"></i>
                <?= htmlspecialchars($animal->getEspecie()) ?>
            </span>
        </div>
        <div class="card-body">
            <h3><?= htmlspecialchars($animal->getNombre()) ?></h3>
            <ul class="card-meta">
                <li><i class="fa-solid fa-dna"></i> <?= htmlspecialchars($animal->getRaza()) ?></li>
                <li><i class="fa-solid fa-cake-candles"></i> <?= htmlspecialchars($animal->getEdad()) ?> año<?= $animal->getEdad() != 1 ? 's' : '' ?></li>
                <li><i class="fa-solid fa-venus-mars"></i> <?= htmlspecialchars($animal->getSexo()) ?></li>
            </ul>
            <p class="card-desc"><?= htmlspecialchars(mb_substr($animal->getDescripcion(), 0, 90)) ?>...</p>
            <a class="btn btn-full" href="perfil.php?animal=<?= urlencode($slug) ?>">
                Ver perfil <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </article>
<?php endforeach; ?>
</section>

<?php include 'includes/footer.php'; ?>
