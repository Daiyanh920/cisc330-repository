<?php
class Product 
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($query) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
        $stmt->execute(["%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $price) {
        $stmt = $this->pdo->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        return $stmt->execute([$name, $price]);
    }

    public function update($id, $name, $price) {
        $stmt = $this->pdo->prepare("UPDATE products SET name = ?, price = ? WHERE id = ?");
        return $stmt->execute([$name, $price, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>