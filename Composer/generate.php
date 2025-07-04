<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=faker_demo;charset=utf8',
    'root',
    ''
); ?>

    <form method="post">
        <label>Nombre d'articles à générer : </label>
        <input type="number" name="nb_articles" value="500" required>
        <button type="submit">Valider</button>
    </form>

<?php
if (isset($_POST['nb_articles'])) {
    require 'vendor/autoload.php';
    $faker = Faker\Factory::create('fr_FR');

    $sql = "TRUNCATE TABLE products";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    for ($i = 0; $i < htmlspecialchars($_POST['nb_articles']); $i++) {
        $name = $faker->words(3, true);
        $description = $faker->text();
        $price = $faker->randomFloat(2, 5, 500);
        $isAvailable = $faker->boolean(80);
        $createdAt = $faker->dateTimeBetween('-2 years', '-1 month')->format('Y-m-d H:i:s');
        $updatedAt = $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s');
        $category = $faker->randomElement(['Books', 'Electronics', 'Toys', 'Clothing', 'Furniture']);
        $image = $faker->imageUrl();

        $sql = "INSERT INTO products (name, description, price, is_available, created_at, updated_at, category, image_url) VALUES (:name, :description, :price, :is_available, :created_at, :updated_at, :category, :image_url)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'is_available' => $isAvailable,
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
            'category' => $category,
            'image_url' => $image
        ]);
    }
    echo "✅ Les données ont été transférées";
}