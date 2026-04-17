<?php
require_once __DIR__ . '/../classes/Animal.php';

$animales = [
    'luna'  => new Animal(
        "Luna", "Perro", 2, "Labrador", "Hembra",
        "Luna es una perrita juguetona y cariñosa que ama correr en el parque. Se lleva muy bien con niños y otros animales. Siempre está dispuesta a dar amor y recibir mimos.",
        "",
        "https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&h=420&fit=crop&auto=format&q=80"
    ),
    'milo'  => new Animal(
        "Milo", "Gato", 1, "Mestizo", "Macho",
        "Milo es un gatito curioso y tranquilo. Le encanta explorar cada rincón de la casa, tomar siestas al sol y jugar con cualquier cosa que encuentre. Muy cariñoso.",
        "",
        "https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=600&h=420&fit=crop&auto=format&q=80"
    ),
    'nala'  => new Animal(
        "Nala", "Perro", 3, "Beagle", "Hembra",
        "Nala es una beagle activa, sociable y llena de energía. Disfruta de los paseos largos y es muy leal a su familia. Ideal para hogares con espacio al aire libre.",
        "",
        "https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?w=600&h=420&fit=crop&auto=format&q=80"
    ),
    'simba' => new Animal(
        "Simba", "Gato", 4, "Siamés", "Macho",
        "Simba es elegante, tranquilo y muy cariñoso. Busca un hogar tranquilo donde pueda recibir atención y descansar en ambientes cálidos. Le gustan las rutinas estables.",
        "",
        "https://images.unsplash.com/photo-1518791841217-8f162f1912da?w=600&h=420&fit=crop&auto=format&q=80"
    ),
    'rocky' => new Animal(
        "Rocky", "Perro", 2, "Pastor Alemán", "Macho",
        "Rocky es inteligente, obediente y muy entrenado. Es el compañero perfecto para familias activas que disfruten del aire libre y los desafíos mentales.",
        "",
        "https://images.unsplash.com/photo-1589941013453-ec89f33b5e95?w=600&h=420&fit=crop&auto=format&q=80"
    ),
];
