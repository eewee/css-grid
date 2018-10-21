<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 05</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-columns: 200px 200px;
            grid-template-rows: 200px 200px;
            grid-template-areas: "a b" "c d";
        }
        header {
            grid-area: a;
            justify-self: center;
        }
        nav {
            grid-area: b;
            align-self: center;
        }
        article {
            grid-area: c;
            justify-self: center;
            align-self: center;
        }
        footer {
            grid-area: d;
        }


        /* Decoration */

        * {box-sizing: border-box}
        .container {
            border: 1px solid #ccc;
            margin-bottom: 2em;
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

    <h1>justify-self / align-self</h1>
    <div class="container">
        <header>header</header>
        <nav>nav</nav>
        <article>article</article>
        <footer>footer</footer>
    </div>

</body>
</html>
