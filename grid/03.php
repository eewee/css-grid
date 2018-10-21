<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 03</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-columns: 20em 1fr;
            grid-template-areas: "h h" "n c" "f f";
        }
        /*
        .container {
            display: grid;
            grid-template-columns: 20% 1fr;
            grid-template-areas: "h h" "n c" "n f";
        }
        */
        header {
            grid-area: h;
        }
        nav {
            grid-area: n;
        }
        article {
            grid-area: c;
        }
        footer {
            grid-area: f;
        }


        /* Decoration */

        * {box-sizing: border-box}
        body {
            margin: 20px;
            background: #fff;
        }
        .container {
            border: 1px solid #ccc;
        }
        div, nav, section, article, aside, header, footer {
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

