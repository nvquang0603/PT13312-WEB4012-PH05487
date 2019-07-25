<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Title')</title>
    <style type="text/css">
        main {
            padding: 2em;
        }
        
        header, footer {
            height: 200px;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        
        ul {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: repeat(5, 1fr);
        }
        
        table {
            width: 100%; text-align: center;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        
        th, td {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr {
            border: solid thin;
            height: 2em;
        }
        
        li {
            list-style: none;
        }
        
        a {
            text-align: center;
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 20px 20px;
            background-color: gold;
        }
        
        a:hover {
            background-image: linear-gradient(45deg, #FDC830, #F37335);
        }
    </style>
</head>
<body>
<header>
    <h1>@yield('header', 'Header Content')</h1>
</header>
<main>
    <nav>
        <ul>
            <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
            <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
            <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
            <li><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent</a></li>
            <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
        </ul>
    </nav>
    <table>
        <h1 style="text-align: center;">@yield('table-title') Table</h1>
        <thead>
        @yield('thead')

        </thead>
        <tbody>
        @yield('tbody')
        </tbody>
    </table>
</main>
<footer>
    <h1>@yield('footer', 'Footer Content')</h1>
</footer>
</body>
</html>
