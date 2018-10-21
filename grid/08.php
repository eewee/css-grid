<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 08</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 100px 100px 100px;
            grid-auto-flow: column;
        }
        header {

        }
        nav {

        }
        article {

        }
        footer {

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

    <h1>Grid Layout : auto-flow 2</h1>
    <div class="container">
        <header>(1) header</header>
        <nav>(2) nav</nav>
        <article>(3) article</article>
        <footer>(4) footer</footer>
        <aside>(5) aside</aside>
    </div>

</body>
</html>
