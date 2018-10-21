<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 02</title>
    <style>
        body {
            display: grid;
            grid-template-columns: 250px 400px;
            grid-template-rows: 100px 300px;
            border:1px solid #ccc;
        }
        nav {
            grid-column: 1; grid-row: 1;
            border:1px solid red;
        }
        section {
            grid-column: 2; grid-row: 1;
            border:1px solid darkred;
        }
        article {
            grid-column: 1; grid-row: 2;
            border:1px solid indianred;
        }
        aside {
            grid-column: 2; grid-row: 2;
            border:1px solid mediumvioletred;
        }
    </style>
</head>
<body>

    <nav>nav</nav>
    <section>section</section>
    <article>article</article>
    <aside>aside</aside>

</body>
</html>