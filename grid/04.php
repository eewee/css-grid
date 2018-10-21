<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 04</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-columns: 250px 1fr; /* largeur 250px et "espace restant" */
            grid-template-rows: 100px 1fr;
            grid-template-areas: "h n" "a f";
            height: 100%;
        }
        header {
            grid-area: h;
        }
        nav {
            grid-area: n;
        }
        article {
            grid-area: a;
        }
        footer {
            grid-area: f;
        }


        /* Decoration */

        * {box-sizing: border-box}
        .container {
            border: 1px solid #ccc;
        }
        nav, section, article, aside, header, footer {
            padding: 10px;
            color: #fff;
        }
        nav {
            background: dodgerblue;
        }
        section {
            background: hotpink;
        }
        article {
            background: orange;
        }
        aside {
            background: olivedrab;
        }
        header {
            background: gray;
        }
        footer {
            background: crimson;
        }
        div:nth-of-type(3) {
            background: olivedrab;
        }
        div:nth-of-type(4) {
            background: hotpink;
        }
        div:nth-of-type(5) {
            background: slategray;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>header</header>
        <nav>nav</nav>
        <article>article</article>
        <footer>footer</footer>
    </div>

</body>
</html>
