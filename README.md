# flash - the ability to create simple flash messages

# install - copy this file in your directory

# desription 
This library allows you to install and display flash messages. There is an opportunity to create your own messages, or to output them from the configuration file, having previously written in the array "name" => "message".
In the constructor of the FlashMessage.php class, you must specify the correct path to the message configuration file.


# Example
$message new FlashMessage;

$message->setFlashMessage('error_login', 'Error message login');
$message->displayFlashMessage('error_login');

will display Error message login

$message->setFlashMessage('error');
$message->displayFlashMessage('error');

will display a message from the configuration file corresponding to the key error
