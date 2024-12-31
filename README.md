<h1>Bulk SMS Dhaka SMS Package for Laravel</h1>
<p>Bulk SMS Dhaka Package for Laravel - Easy to SMS integration with the SMS Gateway from <a href="https://bulksmsdhaka.com">bulksmsdhaka.com</a> Bulk send messages, check balances, get delivery reports, and manage SMS effortlessly in your Laravel applications.</p>
<p>The Bulk SMS Dhaka Laravel package provides convenient access to the <a href="https://bulksmsdhaka.com">bulksmsdhaka.com</a> REST API from php applications.</p>
<p>Sign up for a free <a href="https://bulksmsdhaka.com/register">bulksmsdhaka.com</a> account today and get your API Key from our advanced SMS platform. also, you can check all advanced API documents!</p>

## Example
Check out the API documentation and other language code <a href="https://bulksmsdhaka.com/developer">examples</a>

## Features
- Send SMS messages through the bulksmsdhaka.com sms gateway.
- Check account balance.
- Retrieve SMS delivery reports.

## Requirements
- Laravel Framework 7.x
- PHP 7.2 or higher

## Installation
Install the package via Composer:
```
composer require mysoftit/bulksmsdhaka
```

Set your SMS API key in the .env file:
```
BULKSMSDHAKA_API_KEY=your-api-key
```
Note: Ensure to replace placeholder your-api-key with your actual API key

## Usage
```
use mysoftit\bulksmsdhaka\BulkSMS; // Import the BulkSMSDhaka class

// Create an instance of the class
$sms = new BulkSMS();
try {

    // Send SMS
    $response = $sms->sendSMS(
        "Hello, this is a test SMS! from Bulksmsdhaka.com",
        "01941698614"
    );

   // Check your account SMS balance
    $balance = $sms->getBalance();

} catch (Exception $e) {
    // handle $e->getMessage();
}
```
