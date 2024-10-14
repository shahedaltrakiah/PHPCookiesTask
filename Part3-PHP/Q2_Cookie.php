<?php
// Check if the search query is submitted and retrieve it from the URL
$search_query = "";
if (isset($_GET['search'])) {
    $search_query = htmlspecialchars($_GET['search']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form Example</title>
</head>
<body>
    <h1>Simple Search Form</h1>

    <!-- Search Form -->
    <form action="" method="GET">
        <p>
            <label for="search">Enter your search query:</label><br>
            <input type="text" name="search" placeholder="Search..." value="<?php echo htmlspecialchars($search_query); ?>">
        </p>
        <button type="submit">Search</button>
    </form>

    <!-- Display the search query result -->
    <?php if (!empty($search_query)) : ?>
        <h2>Search Results for: <strong><?php echo $search_query; ?></strong></h2>
        <!-- You can implement actual search logic here based on the query -->
    <?php endif; ?>

</body>
</html>
