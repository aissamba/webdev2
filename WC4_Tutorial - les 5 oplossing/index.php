<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>This is a test for a MySQL database</h1>

    <p>Show the data</p>
    <table>
      <tr>
        <td>Id</td>
        <td>Titel</td>
        <td>Prijs excl BTW</td>
        <td>Prijs incl BTW</td>
        <td>Detail</td>
        <td>Delete</td>
      </tr>

      <?php
        include_once './database/BookDB.php';
        $list = BookDb::getAll();
        foreach ($list as $book) {
      ?>
      <tr>
        <td><?php echo $book->bookId; ?></td>
        <td><?php echo $book->title; ?></td>
        <td><?php echo $book->priceExclVAT; ?></td>
        <td><?php echo $book->priceExclVAT * 1.21; ?></td>
      </tr>
      <?php
      }
      ?>
    </table>
    <a href="form.php">Insert a book</a>
</body>
</html>