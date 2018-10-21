<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 01</title>
    <style>
        body {
            display: grid;
            grid-template-columns: 200px 400px;
            border:1px solid #ccc;
        }
        nav {
            grid-column: 1; /* placement en colonne 1 */
            border:1px solid red;
        }
        section {
            grid-column: 2; /* placement en colonne 2 */
            border:1px solid green;
        }
    </style>
</head>
<body>

    <nav>nav</nav>
    <section>section</section>

</body>
</html>