# Binary Number Conversion Result

This is a simple web application that converts an 8-digit binary number to its decimal equivalent. The application is built using PHP and HTML.

## How to Use the Application

1. Open the web page in a web browser.
2. Enter an 8-digit binary number in the input fields provided.
3. Click the "Convert" button.
4. The application will convert the binary number to decimal and display the results on the page.

## Code Explanation

### HTML Structure
The HTML structure of the web page consists of the following elements:
- `<h2>`: Heading for the page title.
- `<form>`: A form element that contains an input field for each binary digit and a submit button.
- `<label>`: Labels for the input fields.
- `<input>`: Text input fields for each binary digit.
- `<input type="submit">`: The submit button.

### PHP Logic
The PHP code handles the form submission and performs the binary to decimal conversion. Here's a breakdown of the PHP logic:

1. Checking form submission: The code checks if the HTTP request method is POST to determine if the form has been submitted.
   
   ```php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Code for processing form submission
   } else {
       // Code for displaying the form
   }
2. Processing form submission: If the form has been submitted, the code retrieves the binary number from the form fields and concatenates the individual digits.

   ```php
    $binary = "";
    foreach ($_POST["binary"] as $digit) {
      $binary .= $digit;
    }

3. Converting binary to decimal: The bindec() function is used to convert the binary number to its decimal equivalent.

   ```php
     $decimal = bindec($binary);
   ```

4. Displaying the results: The code echoes the binary and decimal results on the web page.

  ```php
    echo "Result (Binary): $binary<br>";
    echo "Result (Decimal): $decimal";
  ```


5. Displaying the form: If the form has not been submitted yet, the code displays the form with input fields for each binary digit.

  ```php
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Form fields for binary digits -->
    </form>
  ```

### Styling
The application also includes some CSS styles to improve the visual appearance of the web page. The styles define the font family, background color, margins, padding, and alignment of various elements.

Please note that this is a simple example and doesn't include extensive input validation or error handling. It assumes that the user will always enter valid 8-digit binary numbers.

Feel free to customize and enhance this code to suit your specific needs.
