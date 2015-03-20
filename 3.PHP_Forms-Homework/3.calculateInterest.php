<?php
/*Write a PHP script CalculateInterest.php which generates an HTML page that contains:
•	An input text field to hold the amount of money
•	Radio buttons to choose the currency
•	An input text field to enter the compound annual interest amount
•	A dropdown menu to choose the period of time
•	A submit button
When the information is submitted, the script should print out the amount of money you will have after the selected period, rounded to 2 decimal places.
Semantic HTML is required. Styling is not required.

Hint: How to calculate compound interest? You may read the Wikipedia article or see the example below.
Explanation of the example:
We have Compound Annual Interest of 12%. This makes 1% interest per month.
This means that each month for a 6 months’ period of time we accrue interest of 1% on the current amount of money.
Given the input from the example, the result would be:

Month	Calculations	Amount of Money
1st 	1000 * 101%	1010
2nd	1010 * 101%	1020.1
3rd 	1020.1 * 101%	1030.301
4th 	1030.301 * 101%	1040.60401
5th	1040.60401 * 101%	1051.0100501
6th	1051.0100501 * 101%	1061.520150601
After the 6th month we have 1061.520150601 USD in our account. We round the result and add the symbol "$" for USD. The output is $ 1061.52.

 */

if (isset($_GET['amount'], $_GET['currency'], $_GET['interest'], $_GET['period']))
{
    $variables = [
        'amount' => $_GET['amount'],
        'interest' => $_GET['interest'] / 12,
        'period' => $_GET['period'],
    ];
    switch ($_GET['currency'])
    {
        case 'USD': $variables['currency'] = '$'; break;
        case 'EUR': $variables['currency'] = '€'; break;
        default: $variables['currency'] = 'lv.'; break;
    }
    $result = $variables['amount'];
    for ($i = 0; $i < $variables['period']; $i++)
    {
        $result *= (100 + $variables['interest']) / 100;
    }
}
?>
<?
/* 1.   The ACTION attribute specifies where to send the form-data when a form is submitted.
 *
 * 2.   The METHOD attribute specifies how to send form-data (the form-data is sent to the page specified in the action attribute).
 * The form-data can be sent as URL variables (with method="get") or as HTTP post transaction (with method="post").
 *
 * 3.   The REQUIRED attribute is a boolean attribute.
 * When present, it specifies that an input field must be filled out before submitting the form.
 * Note: The required attribute works with the following input types:
 * text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.
 *
 * 4.   The DISABLED attribute is a boolean attribute.
 * When present, it specifies that the <input> element should be disabled.
 * A disabled input element is unusable and un-clickable.
 * The disabled attribute can be set to keep a user from using the <input> element until some other condition has been met (like selecting a checkbox, etc.).
 * Then, a JavaScript could remove the disabled value, and make the <input> element usable.
 * Tip: Disabled <input> elements in a form will not be submitted.
 * Note: The disabled attribute will not work with <input type="hidden">.
 *
 * 5.   OPTION is A drop-down list with a pre-selected option.
 * The selected attribute is a boolean attribute.
 * When present, it specifies that an option should be pre-selected when the page loads.
 * The pre-selected option will be displayed first in the drop-down list.
 * Tip: The selected attribute can also be set after the page loads, with a JavaScript.
 */
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>3. Calculate Interest</title>
        </head>
        <body>
            <form action="" method="get">
                <div>
                    <label for="amount">Enter amount: </label>
                    <input type="text"  name="amount" required/>
                </div>

                <div>
                    <input type="radio" name="currency" value="USD" required/>
                    <label for="USD">USD</label>
                    <input type="radio" name="currency" value="EUR"/>
                    <label for="EUR">EUR</label>
                    <input type="radio" name="currency" value="BGN"/>
                    <label for="BGN">BGN</label>
                </div>

                <div>
                    <label for="interest">Compound Interest Amount</label>
                    <input type="text" name="interest" required>
                </div>

                <div>
                    <select name="period" required>
                        <option selected value="" disabled>Period</option>
                        <option value="6">6 months</option>
                        <option value="12">1 year</option>
                        <option value="24">2 years</option>
                        <option value="60">5 years</option>
                        <input type="submit" value="Calculate">
                    </select>
                </div>
            </form>

            <?php if(isset($result)): ?>
                <p><?= htmlentities($variables['currency']) . ' ' . htmlentities(round($result, 2)) ?></p>
            <?php endif ?>
        </body>
    </html>