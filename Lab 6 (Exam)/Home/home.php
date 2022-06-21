<head>
    <title>Home</title>
</head>
<body>

<?php

    if (isset($_COOKIE['admin'])){
        echo "admin";

    }
    else if (isset($_COOKIE['user'])){
        echo "user";
    }

?>
</body>