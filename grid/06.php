<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 06</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-columns: 10em 1fr;
            grid-template-rows: auto 1fr auto;
            height: 300px;
        }
        header {
            grid-column: 1 / span 2;    /* 1er col & consomme 2 espaces */
            grid-row: 1;                /* 1er ligne */
        }
        nav {
            grid-column: 1;             /* 1er col */
            grid-row: 2;                /* 2nd ligne */
        }
        article {
            grid-column: 2;             /* 2nd col */
            grid-row: 2;                /* 2nd ligne */
        }
        footer {
            grid-column: 1 / span 2;
            grid-row: 3;                /* 3th ligne */
        }


        /* Decoration */

        * {box-sizing: border-box}
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

    <h1>Grid Layout : spans</h1>
    <div class="container">
        <header>header</header>
        <nav>nav</nav>
        <article>article</article>
        <footer>footer</footer>
    </div>

</body>
</html>



