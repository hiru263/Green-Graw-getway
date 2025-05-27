<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #4CAF50;
        }

        .question {
            margin: 15px 0;
        }

        label {
            font-weight: bold;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .response {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            background-color: #e7f7e7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Green Grow Gateway</h1>
        <form id="questionnaire">
            <div class="question">
                <label for="company">Are you a company?</label><br>
                <input type="radio" name="company" value="yes" id="company-yes" aria-label="Yes"> Yes
                <input type="radio" name="company" value="no" id="company-no" aria-label="No"> No
            </div>
            <div class="question">
                <label for="customer">Are you a customer?</label><br>
                <input type="radio" name="customer" value="yes" id="customer-yes" aria-label="Yes"> Yes
                <input type="radio" name="customer" value="no" id="customer-no" aria-label="No"> No
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="response" class="response"></div>
    </div>

    <script>
        document.getElementById('questionnaire').addEventListener('submit', function(e) {
            e.preventDefault();
            const companyResponse = document.querySelector('input[name="company"]:checked');
            const customerResponse = document.querySelector('input[name="customer"]:checked');

            if (companyResponse && companyResponse.value === "yes") {
                // Redirect to company login page
                window.location.href = 'companyregister.php'; 
            } else if (customerResponse && customerResponse.value === "yes") {
                // Redirect to customer login page
                window.location.href = 'customerregister.php';L
            } else {
                document.getElementById('response').innerHTML = '<p>Please answer all questions.</p>';
            }
        });
    </script>
</body>
</html>
