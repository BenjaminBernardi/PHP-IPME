<?php
include "header.php";
include "pdo.php";

if (isset($_GET["standard_state"]) && $_GET["standard_state"] != "") {
    $sql = "SELECT * FROM elements WHERE standard_state = '" . $_GET["standard_state"] . "' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET["search"]) && isset($_GET["block"]) && $_GET["block"] != "display all") {
    $sql = "SELECT * FROM elements WHERE name LIKE '%" . $_GET["search"] . "%' AND group_block = '" . $_GET["block"] . "' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET["search"]) && isset($_GET["block"]) && $_GET["block"] == "display all") {
    $sql = "SELECT * FROM elements WHERE name LIKE '%" . $_GET["search"] . "%' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM elements ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


// recuperer les éléments de group_block :
$sql = "SELECT group_block, count(*) FROM elements GROUP BY group_block";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$groupBlock = $stmt->fetchAll(PDO::FETCH_ASSOC);

$test = ["display all"];
foreach ($groupBlock as $group) {
    $test[] = $group["group_block"];
}
?>
    <div class="container">
    <form id="recherche">
        <div class="form-style">
            <label for="search" class="lead">Search an element: </label>
            <input type="search" class="form-control" name="search">
        </div>
        <div class="form-style">
            <label for="block" class="lead">Sort by group block: </label>
            <select name="block" class="form-control">
                <?php foreach ($test as $item) : ?>
                    <option value="<?php echo $item ?>"><?php echo $item ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-style">
            <input type="submit" class="btn btn-warning" value="Search an element">
        </div>
        <div class="form-style">
            <a href="index.php?standard_state=gas">
                <button type="button" class="btn btn-primary">Show gas elements</button>
            </a>
            <a href="index.php?standard_state=solid">
                <button type="button" class="btn btn-primary">Show solid elements</button>
            </a>
            <a href="index.php?standard_state=liquid">
                <button type="button" class="btn btn-primary">Show liquid elements</button>
            </a>
            <a href="index.php">
                <button type="button" class="btn btn-success">Show all elements</button>
            </a>
        </div>
    </form>

<?php if (count($elements) > 0) : ?>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Symbol</th>
            <th>Atomic number</th>
            <th>Standard State</th>
            <th>Year discovered</th>
            <th>Group block</th>
            <th>Action</th>
        </tr>
        <?php foreach ($elements as $element) : ?>
            <tr>
                <td><?= $element["name"] ?></td>
                <td><?= $element["symbol"] ?></td>
                <td><?= $element["atomic_number"] ?></td>
                <td><?php if ($element["standard_state"] != "") {
                        echo $element["standard_state"];
                    } else {
                        echo "undefined";
                    } ?></td>
                <td><?php if ($element["year_discovered"] != "") {
                        echo $element["year_discovered"];
                    } else {
                        echo "undefined";
                    } ?></td>
                <td><?= $element["group_block"] ?></td>
                <td>
                    <a href=<?= "item.php?id=" . $element["id"] ?>>
                        <button type="button" class="btn btn-info">Show</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <h2>No results found</h2>
    </div>
<?php endif;

include "footer.php";
?>