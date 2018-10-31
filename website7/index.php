<?php
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';
    
    // Return filename
    echo basename($path);

    // Return filename without ext
    echo basename($path, '.php');

    // Return the dir name from path
    echo dirname($path);

    // Check to see if file exists returns boolean 0 / 1
    // can be used for folder as well, unline is_file
    echo file_exists($file);

    // get absolute path
    echo realpath($file);

    // Checks to see if file returns boolean
    echo is_file($file);

    // Check if writeable or read-only
    echo is_writable($file);
    
    // Check if readable
    echo is_readable($file);

    // Get file size
    echo filesize($file);

    // Create a directory
    mkdir('testing');

    // Delete directory IF Empty
    rmdir('testing');

    // Copy a file
    echo copy('file1.txt', 'file2.txt');

    // Rename file
    rename('file2.txt', 'myfile.txt');

    // Delete File
    unlink('myfile.txt');

    // Write from file to string
    echo file_get_contents($file);

    // Wrtie a string to a file
    echo file_put_contents($file, 'Goodbye world');

    $current = file_get_contents($file);

    $current .= 'Goodbye World';

    file_put_contents($file, $current);

    // Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Drew Beaupre\n";
    fwrite($handle, $txt);
    fclose($handle);

?>