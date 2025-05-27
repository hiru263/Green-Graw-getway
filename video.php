<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selector</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid #ccc;
            background-color: white;
            padding: 20px;
            z-index: 1000;
        }

        #languageBtn {
            margin: 20px;
        }

        #closeBtn {
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body>
    <button id="languageBtn">Select Language</button>
    
    <div id="languagePopup" class="popup">
        <span id="closeBtn">&times;</span>
        <h2>Select Language</h2>
        <ul>
            <li data-lang="en">English</li>
            <li data-lang="es">Spanish</li>
            <li data-lang="fr">French</li>
        </ul>
    </div>

    <script src="script.js"></script> <!-- External JavaScript file -->
    <!-- Or directly include the script here -->
    <script>
        document.getElementById('languageBtn').onclick = function() {
            document.getElementById('languagePopup').style.display = 'block';
        }

        document.getElementById('closeBtn').onclick = function() {
            document.getElementById('languagePopup').style.display = 'none';
        }

        const languageItems = document.querySelectorAll('#languagePopup ul li');
        languageItems.forEach(item => {
            item.onclick = function() {
                const selectedLang = item.getAttribute('data-lang');
                alert('Language selected: ' + selectedLang);
                document.getElementById('languagePopup').style.display = 'none';
                // Add logic to change the webpage language here
            }
        });
    </script>
</body>
</html>