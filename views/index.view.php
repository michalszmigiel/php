<?php require ('partials/head.php');?>

<?php require ('partials/nav.php');?>
    <h1>Home</h1>

<?php foreach ($users as $user) :?>
    <div><?= $user->name ;?></div>
<?php endforeach;?>

<h2>Submit your name</h2>
    <form method="post" action="/names">
        <input type="text" name="name"/>
        <input type="submit" value="Submit">
    </form>

<?php require ('partials/footer.php');?>