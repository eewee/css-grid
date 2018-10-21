<html>
<head>
    <meta charset="utf-8" />
    <title>CSS 09</title>
    <style>
        /* Layout */

        .container {
            display: grid;
            grid-template-areas: "a b c d";
            grid-template-columns: repeat(4, 1fr)
        }

        /* Responsive */
        @media (max-width: 640px) {
            .container {
                grid-template-areas: "a" "d" "b" "c";
                grid-template-columns: 1fr;
            }
        }


        header {
            grid-area: a;
        }
        nav {
            grid-area: b;
        }
        article {
            grid-area: c;
        }
        footer {
            grid-area: d;
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

    <h1>Grid Layout : responsive</h1>
    <div class="container">
        <header>(1) header</header>
        <nav>(2) nav</nav>
        <article>(3) article</article>
        <footer>(4) footer</footer>
    </div>

</body>
</html>
