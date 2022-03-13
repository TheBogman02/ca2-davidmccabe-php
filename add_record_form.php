<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add Recruit</h1>
        <form action="add_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label>Recruit Name:</label>
            <input type="input" name="name">
            <br>

<<<<<<< HEAD
            <label>Job:</label>
<<<<<<< HEAD
            <input type="input" name="job">
=======
            <label>List Price:</label>
            <input type="input" name="price">
>>>>>>> parent of 1234836 (several fixes to database creation, fixed add recruit and edit recruit form)
            <br>        
            
            <label>Image:</label>
=======
            <input type="input" name="price">
            <br>        
            
            <label>Date Of Registration:</label>
            <input type="input" name="price">
            <br>
            <label>Blood Type:</label>
            <input type="input" name="price">
            <br>
            <label>Recruit Image:</label>
>>>>>>> 6d2f07a2c2213a69bcb0b4b30da0aff8fe69b442
            <input type="file" name="image" accept="image/*" />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Recruit">
            <br>
        </form>
        <p><a href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>