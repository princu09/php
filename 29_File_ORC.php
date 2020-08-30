<?php

$fptr = fopen("DemoFiles/myFile.txt", "r");

$count = fread($fptr , filesize("DemoFiles/myFile.txt"));

fclose($fptr);
echo $count;
//Created By NorthFox PHP Developers

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Open Read Close</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }
    td{
        padding:5px 10px;
    }
</style>
</head>
<body>
    <h4>This is table for learn Mode in PHP.</h4>
    <table border="1px" style="max-width:70%;margin-top:20px;border:2px solid black;">
        <th colspan="2">File Open Mode and Description</th>
        <tr>
            <td>Mode</td>
            <td>Description</td>
        </tr>
        <tr>
            <td>
                'r'</td>
            <td>
                Open for reading only; place the file pointer at the beginning of the file.
            </td>
        </tr>
        <tr>
            <td>
                'r+'
            </td>
            <td>
                Open for reading and writing; place the file pointer at the beginning of the file.
            </td>
        </tr>
        <tr>
            <td>
                'w'
            </td>
            <td>
                Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
            </td>
        </tr>
        <tr>
            <td>
                'w+'
            </td>
            <td>
                Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
            </td>
        </tr>
        <tr>
            <td>
                'a'
            </td>
            <td>
                Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
            </td>
        </tr>
        <tr>
            <td>
                'a+'
            </td>
            <td>
                Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
            </td>
        </tr>
        <tr>
            <td>
                'x'
            </td>
            <td>
                Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning FALSE and generating an error of level E_WARNING. If the file does not exist, attempt to create
                it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
            </td>
        </tr>
        <tr>
            <td>
                'x+'
            </td>
            <td>
                Create and open for reading and writing; otherwise it has the same behavior as 'x'.
            </td>
        </tr>
        <tr>
            <td>
                'c'
            </td>
            <td>
                Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the
                file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used
                after the lock is requested).</td>
        </tr>
        <tr>
            <td>
                'c+'</td>
            <td>
                Open the file for reading and writing; otherwise it has the same behavior as 'c'. </td>
        </tr>
        <tr>
            <td>
                'e'
            </td>
            <td>
                Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.
            </td>
        </tr>
    </table>
</body>
</html>