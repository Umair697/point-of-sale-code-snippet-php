<?php
/* Change to the correct path if you copy this example! */
require __DIR__ . '/../../autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

try {
    // Enter the share name for your USB printer here
    //$connector = null;
    $connector = new WindowsPrintConnector("BlackCopper");

    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer->text("Developed by Mohammad Ali Khan.\n Email: xvirus.bd@gmail.com\n");
    $printer->cut();
    /* Close printer */
    $printer->close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
}
?>
