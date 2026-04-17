<?php
require_once 'includes/header.php';
require_once 'includes/animales.php';

$slug   = $_GET['animal'] ?? '';
$animal = $animales[$slug] ?? null;

if (!$animal) {
    echo '<div class="page-header"><h2>Animal no encontrado</h2><p><a href="adopcion.php" class="back-link">← Volver a adopciones</a></p></div>';
    include 'includes/footer.php';
    exit;
}
?>

<div class="page-header page-header-sm">
    <a href="adopcion.php" class="back-link">
        <i class="fa-solid fa-arrow-left"></i> Volver a adopciones
    </a>
</div>

<section class="perfil">

    <div class="perfil-hero">
        <img
            src="<?= htmlspecialchars($animal->getFoto()) ?>"
            alt="Foto de <?= htmlspecialchars($animal->getNombre()) ?>"
            class="perfil-foto"
        >
        <div class="perfil-hero-info">
            <div class="perfil-badges">
                <span class="badge badge-<?= strtolower($animal->getEspecie()) ?>">
                    <i class="fa-solid fa-<?= $animal->getEspecie() === 'Perro' ? 'dog' : 'cat' ?>"></i>
                    <?= htmlspecialchars($animal->getEspecie()) ?>
                </span>
                <span class="badge badge-sexo">
                    <i class="fa-solid fa-venus-mars"></i>
                    <?= htmlspecialchars($animal->getSexo()) ?>
                </span>
            </div>
            <h2><?= htmlspecialchars($animal->getNombre()) ?></h2>
            <div class="perfil-datos">
                <div class="perfil-dato">
                    <i class="fa-solid fa-dna"></i>
                    <div>
                        <span class="dato-label">Raza</span>
                        <span class="dato-val"><?= htmlspecialchars($animal->getRaza()) ?></span>
                    </div>
                </div>
                <div class="perfil-dato">
                    <i class="fa-solid fa-cake-candles"></i>
                    <div>
                        <span class="dato-label">Edad</span>
                        <span class="dato-val"><?= htmlspecialchars($animal->getEdad()) ?> año<?= $animal->getEdad() != 1 ? 's' : '' ?></span>
                    </div>
                </div>
            </div>
            <a class="btn btn-accent btn-lg" href="adoptar.php?animal=<?= urlencode($slug) ?>">
                <i class="fa-solid fa-heart"></i>
                Adoptar a <?= htmlspecialchars($animal->getNombre()) ?>
            </a>
        </div>
    </div>

    <div class="perfil-content">
        <div class="perfil-block">
            <h3><i class="fa-solid fa-book-open"></i> Sobre <?= htmlspecialchars($animal->getNombre()) ?></h3>
            <p><?= htmlspecialchars($animal->getDescripcion()) ?></p>
        </div>

        <div class="perfil-block">
            <h3><i class="fa-solid fa-notes-medical"></i> Ficha de salud</h3>
            <ul class="checklist">
                <li><i class="fa-solid fa-circle-check"></i> Vacunas al día</li>
                <li><i class="fa-solid fa-circle-check"></i> Desparasitado</li>
                <li><i class="fa-solid fa-circle-check"></i> Control veterinario</li>
                <li><i class="fa-solid fa-circle-check"></i> Apto para convivencia</li>
            </ul>
        </div>
    </div>

</section>

<?php include 'includes/footer.php'; ?>
