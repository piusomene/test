<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #35424a;
            color: #ffffff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }

        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        ul {
            padding: 0;
            list-style: none;
        }

        ul li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }

        .footer {
            background: #35424a;
            color: #ffffff;
            text-align: center;
            padding: 30px 0;
            margin-top: 30px;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">My</span> Website</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <h1>Welcome to My Website</h1>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div>
    </section>

    <footer class="footer">
        <p>Address: 1234 Street Name, City, State, Zip</p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: info@example.com</p>
        <p>Areas of Practice: Family Law, Criminal Law, Business Law</p>
        <p>&copy; 2023 Your Law Firm Name. All rights reserved.</p>
    </footer>

</body>
</html>
