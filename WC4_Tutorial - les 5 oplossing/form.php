<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Add Book</title>
  </head>
  <body>
    <h1>New book</h1>
    <form action="insert.php" method="POST">
      <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value=""/>
        
      </div>
      <div>
        <label for="releasedate">Release Date(DD/MM/YYYY):</label>
        <input type="text" name="releasedate" value=""/>
      </div>
      <div>
        <label for="price">Price excl. VAT: </label>
        <input type="text" name="price" value=""/>
      </div>
      <div>
        <label for="emailPublisher">Email publisher (valid email):</label>
        <input type="text" name="emailPublisher" value=""/>
      </div>
      <div>
        <input type="submit" value="Create">
      </div>
    </form>
    <a href="index.php">Back to list of books</a>
  </body>
</html>