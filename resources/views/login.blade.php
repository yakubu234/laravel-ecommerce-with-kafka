<!DOCTYPE html>
<html>

<head>
    <title> - Login</title>
    <style>
        .login-container {
            max-width: 400px;
            margin: auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 50px;
        }

        h1 {
            margin-bottom: 30px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div id="tables"></div>
        <h4 id="h4"></h4>
        <form action="" method="post">
            <label for="username">Email:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button type="submit" name="login">Login</button>
            <button type="reset" name="reset">Reset</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/xhr.js') }}"></script>
    <script>
        var client = new HttpClient();
        client.get('/api/all-users', null, (response) => {

            if (response.data != null || response.data > 0) {
                let data = response.data


                const tbl = document.createElement("table");
                const tblBody = document.createElement("tbody");
                // creates a table row
                const row = document.createElement("tr");
                const cell = document.createElement("th");
                //
                const cellText = document.createTextNode(`email`)
                cell.appendChild(cellText);
                row.appendChild(cell);

                //
                const cell2 = document.createElement("th");
                const cellText2 = document.createTextNode(`password`)
                cell2.appendChild(cellText2);
                row.appendChild(cell2);
                tblBody.appendChild(row);

                Object.keys(data).forEach(key => {

                    // creates a table row
                    const row = document.createElement("tr");

                    for (let j = 0; j < 2; j++) {
                        const cell = document.createElement("td");
                        const cellText = (j == 1) ? document.createTextNode(`password`) : document.createTextNode(`${data[key].email}`)
                        // const cellText = document.createTextNode(`cell in row ${i}, column ${j}`);
                        cell.appendChild(cellText);
                        row.appendChild(cell);
                    }

                    // add the row to the end of the table body
                    tblBody.appendChild(row);
                });

                // put the <tbody> in the <table>
                tbl.appendChild(tblBody);
                // appends <table> into <body>
                document.getElementById('tables').appendChild(tbl);
                // sets the border attribute of tbl to '2'
                tbl.setAttribute("border", "1");
                tbl.setAttribute("style", "margin:0px auto;");
                document.getElementById('h4').innerText = "Use any of the Above details to logn below"
            } else {
                document.getElementById('h4').innerText = "please run seeder at the terminal for user to be seeded"
            }


        });


        const form = document.querySelector('form');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const username = form.username.value;
            const password = form.password.value;

            try {
                const response = await fetch('/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        username,
                        password
                    })
                });
                const data = await response.json();
                if (data.success) {
                    window.location.href = '/dashboard';
                } else {
                    alert('Invalid username or password');
                }
            } catch (error) {
                console.error(error);
                alert('An error occurred. Please try again.');
            }
        });
    </script>
</body>

</html>