<form action="procesar_libros.php" method="POST">
  <input type="text" name="titulo" placeholder="Título" required>
  <input type="text" name="autor" placeholder="Autor" required>
  <input type="number" step="0.01" name="precio" placeholder="Precio" required>
  <input type="number" name="cantidad" placeholder="Cantidad en inventario" required>
  <button type="submit">Registrar Libro</button>
</form>