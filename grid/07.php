<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 07</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-columns: 10px repeat(4, 1fr 10px);
        }
        header {
            grid-column: 2 ;
        }
        nav {
            grid-column: 4;
        }
        article {
            grid-column: 6;
        }
        footer {
            grid-column: 8;
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

    <h1>Grid Layout : repeat</h1>
    <div class="container">
        <header>header</header>
        <nav>nav</nav>
        <article>article</article>
        <footer>footer</footer>
    </div>

</body>
</html>








