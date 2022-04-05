<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>

<body>

    <h1 style="text-align: center;">File Handling</h1>



    <!--------------------------------------------------- PHP readfile() Function --------------------------------------------------->

    <h2>PHP readfile() Function</h2>

    <?php
    echo readfile("wot.txt");
    ?>
    <hr>

    <!--------------------------------------------------- PHP Open File - fopen() Function --------------------------------------------------->

    <h1 style="text-align: center;">PHP File Open/Read/Close</h1>

    <h2>PHP Open File - fopen()</h2>

    <?php
    $myfile = fopen("wot.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("wot.txt"));
    fclose($myfile);
    ?>

    <pre>
<h4>The file may be opened in one of the following modes :</h4>
Modes	    Description

r	    Open a file for read only. File pointer starts at the beginning of the file
w	    Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	    Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	    Creates a new file for write only. Returns FALSE and an error if file already exists
r+	    Open a file for read/write. File pointer starts at the beginning of the file
w+	    Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	    Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	    Creates a new file for read/write. Returns FALSE and an error if file already exists


The fread() function reads from an open file.

The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.

</pre>

    <hr>

    <!--------------------------------------------------- PHP Close File - fclose() Function --------------------------------------------------->

    <h2>PHP Close File - fclose() Function</h2>

    <?php
    $myfile = fopen("wot.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    ?>

    <hr>

    <!--------------------------------------------------- PHP Read Single Line - fgets() Function --------------------------------------------------->

    <h2>PHP Read Single Line - fgets() Function</h2>

    <?php
    $myfile = fopen("wot.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    ?>

    <hr>

    <!--------------------------------------------------- PHP Check End-Of-File - feof() Function --------------------------------------------------->

    <h2>PHP Check End-Of-File - feof() Function</h2>

    <?php
    $myfile = fopen("wot.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>

    <hr>

    <!--------------------------------------------------- PHP Read Single Character - fgetc() Function --------------------------------------------------->

    <h2>PHP Read Single Character - fgetc() function</h2>

    <?php
    $myfile = fopen("wot.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
    ?>

    <hr>

    <!--------------------------------------------------- PHP Create File - fopen() Function --------------------------------------------------->

    <h2>PHP Create File - fopen() Function</h2>

    <pre>
The fopen() function is also used to create a file. in PHP, a file is created using the same function used to open files.

If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

$myfile = fopen("testfile.txt", "w")

</pre>

    <hr>

    <!--------------------------------------------------- PHP Write to File - fwrite() Function --------------------------------------------------->

    <h2>PHP Write to File - fwrite() Function</h2>

    <?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    // $myfile = fopen("newfile.txt", "r");
    fclose($myfile);
    ?>

    <?php
    $myfile = fopen("newfile.txt", "a") or die("Unabkle to open file!");
    $txt = "Vishal Mehta\n";
    fwrite($myfile, $txt);
    $txt = "Raj Vyas\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>

    <?php
    $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>

    <hr>

    <!--------------------------------------------------- PHP Read Single Character - fgetc() Function --------------------------------------------------->

    <h2>Upload</h2>

    <h4>Create The HTML Form</h4>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <h4>Create The Upload File PHP Script</h4>

    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size

        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>

    <hr>





    <!--------------------------------------------------- PHP Filesystem Reference Function --------------------------------------------------->

    <h2>PHP Filesystem Reference Function</h2>

    <!-------------------------- PHP basename() Function -------------------------->

    <h3>PHP basename() Function</h3>

    <?php
    $path = "/testweb/home.php";

    //Show filename
    echo basename($path) . "<br/>";

    //Show filename, but cut off file extension for ".php" files
    echo basename($path, ".php");
    ?>

    <!-------------------------- PHP chgrp() Function -------------------------->

    <h3>PHP chgrp() Function</h3>

    <?php
    chgrp("wot.txt", "admin")
    ?>

    <!-------------------------- PHP chmod() Function -------------------------->

    <h3>PHP chmod() Function</h3>

    <?php
    // Read and write for owner, nothing for everybody else
    chmod("wot.txt", 0600);

    // Read and write for owner, read for everybody else
    chmod("wot.txt", 0644);

    // Everything for owner, read and execute for everybody else
    chmod("wot.txt", 0755);

    // Everything for owner, read for owner's group
    chmod("wot.txt", 0740);
    ?>

    <!-------------------------- PHP chown() Function -------------------------->

    <h3>PHP chown() Function</h3>

    <?php
    chown("wot.txt", "charles")
    ?>

    <!-------------------------- PHP clearstatcache() Function -------------------------->

    <h3>PHP clearstatcache() Function</h3>

    <?php
    //output filesize
    echo filesize("newfile.txt");
    echo "<br />";

    $file = fopen("newfile.txt", "a+");
    // truncate file
    ftruncate($file, 100);
    fclose($file);

    //Clear cache and check filesize again
    clearstatcache();
    echo filesize("newfile.txt");
    ?>

    <PRE>
    Tip: Functions that are caching:

        stat()
        lstat()
        file_exists()
        is_writable()
        is_readable()
        is_executable()
        is_file()
        is_dir()
        is_link()
        filectime()
        fileatime()
        filemtime()
        fileinode()
        filegroup()
        fileowner()
        filesize()
        filetype()
        fileperms()
    </PRE>

    <!-------------------------- PHP copy() Function -------------------------->

    <h3>PHP copy() Function</h3>

    <?php
    echo copy("newfile.txt", "wot.txt");
    ?>

    <!-------------------------- PHP dirname() Function -------------------------->

    <h3>PHP dirname() Function</h3>

    <?php
    echo dirname("c:/testweb/home.php") . "<br >";
    echo dirname("c:/testweb/home.php", 2) . "<br >";
    echo dirname("/testweb/home.php");
    ?>

    <!-------------------------- PHP disk_free_space() Function -------------------------->

    <h3>PHP disk_free_space() Function</h3>

    <?php
    echo disk_free_space("c:");
    ?>

    <!-------------------------- PHP disk_total_space() Function -------------------------->

    <h3>PHP disk_total_space() Function</h3>

    <?php
    echo disk_total_space("c:");
    ?>

    <!-------------------------- PHP fflush() Function -------------------------->

    <h3>PHP fflush() Function</h3>

    <?php
    // $file = fopen("wot.txt", "r+");
    // rewind($file);
    // fwrite($file, 'Hello World');
    // fflush($file);

    // fclose($file);
    ?>

    <!-------------------------- PHP fgetcsv() Function -------------------------->

    <h3>PHP fgetcsv() Function</h3>

    <?php

    $file = fopen("vish.csv", "w");
    $txt = "Hello Buddy";
    fwrite($file, $txt);

    ?>

    <?php
    $file = fopen("vish.csv", "r");
    print_r(fgetcsv($file));
    fclose($file);
    ?>

    <!-------------------------- PHP fgets() Function -------------------------->

    <h3>PHP fgets() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");
    echo fgets($file);
    fclose($file);
    ?>

    <!-------------------------- PHP file() Function -------------------------->

    <h3>PHP file() Function</h3>

    <?php
    print_r(file("wot.txt"));
    ?>

    <!-------------------------- PHP file_exists() Function -------------------------->

    <h3>PHP file_exists() Function</h3>

    <?php
    echo file_exists("wot.txt");
    ?>

    <!-------------------------- PHP file_get_contents() Function -------------------------->

    <h3>PHP file_get_contents() Function</h3>

    <?php
    echo file_get_contents("newfile.txt");
    ?>

    <!-------------------------- PHP file_put_contents() Function -------------------------->

    <h3>PHP file_put_contents() Function</h3>

    <?php
    echo file_put_contents("newfile.txt", "Hello World. Testing!");
    ?>

    <!-------------------------- PHP fileatime() Function -------------------------->

    <h3>PHP fileatime() Function</h3>

    <?php
    echo fileatime("wot.txt");
    echo "<br>";
    echo "Last access: " . date("F d Y H:i:s.", fileatime("wot.txt"));
    ?>

    <!-------------------------- PHP filectime() Function -------------------------->

    <h3>PHP filectime() Function</h3>

    <?php
    echo filectime("wot.txt");
    echo "<br>";
    echo "Last changed: " . date("F d Y H:i:s.", filectime("wot.txt"));
    ?>

    <!-------------------------- PHP filegroup() Function -------------------------->

    <h3>PHP filegroup() Function</h3>

    <?php
    echo filegroup("wot.txt");
    ?>

    <!-------------------------- PHP fileinode() Function -------------------------->

    <h3>PHP fileinode() Function</h3>

    <?php
    echo fileinode("wot.txt");
    ?>

    <!-------------------------- PHP filemtime() Function -------------------------->

    <h3>PHP filemtime() Function</h3>

    <?php
    echo filemtime("wot.txt");
    echo "<br>";
    echo "Content last changed: " . date("F d Y H:i:s.", filemtime("wot.txt"));
    ?>

    <!-------------------------- PHP fileowner() Function -------------------------->

    <h3>PHP fileowner() Function</h3>

    <?php
    echo fileowner("wot.txt");
    ?>

    <!-------------------------- PHP fileperms() Function -------------------------->

    <h3>PHP fileperms() Function</h3>

    <?php
    echo fileperms("wot.txt");
    ?>
    <br><br>
    <?php
    echo substr(sprintf("%o", fileperms("wot.txt")), -4);
    ?>

    <!-------------------------- PHP filesize() Function -------------------------->

    <h3>PHP filesize() Function</h3>

    <?php
    echo filesize("wot.txt");
    ?>

    <!-------------------------- PHP filetype() Function -------------------------->

    <h3>PHP filetype() Function</h3>

    <?php
    echo filetype("wot.txt");
    ?>

    <!-------------------------- PHP flock() Function -------------------------->

    <h3>PHP flock() Function</h3>

    <?php
    $file = fopen("wot.txt", "w+");

    // exclusive lock
    // if (flock($file, LOCK_EX)) {
    //     fwrite($file, "Add some text to the file.");
    //     fflush($file);
    //     // release lock
    //     flock($file, LOCK_UN);
    // } else {
    //     echo "Error locking file!";
    // }
    // fclose($file);
    ?>

    <pre>
        Parameter Values

        file : Required. Specifies an open file to lock or release
        lock : Required. Specifies what kind of lock to use.
        Possible values:

        LOCK_SH - A shared lock (reader). Allow other processes to access the file
        LOCK_EX - An exclusive lock (writer). Prevent other processes from accessing the file
        LOCK_UN - Release the lock
        LOCK_NB - Avoid blocking other processes while locking
    </pre>

    <!-------------------------- PHP fnmatch() Function -------------------------->

    <h3>PHP fnmatch() Function</h3>

    <?php
    $txt = "My car is a dark color";
    if (fnmatch("*col[ou]r", $txt)) {
        echo "hmm...";
    }
    ?>

    <!-------------------------- PHP fopen() Function -------------------------->

    <h3>PHP fopen() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");

    //Output lines until EOF is reached
    while (!feof($file)) {
        $line = fgets($file);
        echo $line . "<br>";
    }

    fclose($file);
    ?>

    <!-------------------------- PHP fpassthru() Function -------------------------->

    <h3>PHP fpassthru() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");
    // Read first line
    fgets($file);

    // Read from the current position in file - until EOF, and then write the result to the output buffer
    echo fpassthru($file);

    fclose($file);
    ?>

    <!-------------------------- PHP fputcsv() Function -------------------------->

    <h3>PHP fputcsv() Function</h3>

    <?php
    $list = array(
        array("Peter", "Griffin", "Oslo", "Norway"),
        array("Glenn", "Quagmire", "Oslo", "Norway")
    );

    $file = fopen("contacts.csv", "w");

    foreach ($list as $line) {
        fputcsv($file, $line);
    }

    fclose($file);
    ?>

    <!-------------------------- PHP fread() Function -------------------------->

    <h3>PHP fread() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");
    fread($file, "10");
    fclose($file);
    ?>

    <!-------------------------- PHP fscanf() Function -------------------------->

    <h3>PHP fscanf() Function</h3>

    <pre>

        Parameter Values
       
        file	Required. Specifies the file to check
        format	Required. Specifies the format.
        Possible format values:

        %% - Returns a percent sign
        %b - Binary number
        %c - The character according to the ASCII value
        %d - Signed decimal number
        %e - Scientific notation (e.g. 1.2e+2)
        %u - Unsigned decimal number
        %f - Floating-point number (local settings aware)
        %F - Floating-point number (not local settings aware)
        %o - Octal number
        %s - String
        %x - Hexadecimal number (lowercase letters)
        %X - Hexadecimal number (uppercase letters)
        
        Additional format values. These are placed between the % and the letter (example %.2f):

        + (Forces both + and - in front of numbers. By default, only negative numbers are marked)
        ' (Specifies what to use as padding. Default is space. Must be used together with the width specifier. Example: %'x20s (this uses "x" as padding)
        - (Left-justifies the variable value)
        [0-9] (Specifies the minimum width held of to the variable value)
        .[0-9] (Specifies the number of decimal digits or maximum string length)
       
        Note: If multiple additional format values are used, they must be in the same order as above.

</pre>



    <!-------------------------- PHP fseek() Function -------------------------->

    <h3>PHP fseek() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");
    // Read first line
    echo fgets($file);
    // Move back to beginning of file
    fseek($file, 0);
    fclose($file);
    ?>

    <pre>

        Parameter Values

        File :Required. Specifies the open file to seek in
        Offset : Required. Specifies the new position (measured in bytes from the beginning of the file)

        whence			Optional Possible values:
        SEEK_SET - 		Set position equal to offset. Default
        SEEK_CUR -		Set position to current location plus offset
        SEEK_END - 		Set position to EOF plus offset (to move to a position before EOF, the offset must be a negative value)

    </pre>

    <!-------------------------- PHP fstat() Function -------------------------->

    <h3>PHP fstat() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");
    print_r(fstat($file));
    fclose($file);
    ?>

    <pre>
        Technical Details
        Return Value:	An array with information about the open file:
        [0] or [dev] - 	Device number
        [1] or [ino] - 	Inode number
        [2] or [mode] - 	Inode protection mode
        [3] or [nlink] - 	Number of links
        [4] or [uid] - 	User ID of owner
        [5] or [gid] - 	Group ID of owner
        [6] or [rdev] - 	Inode device type
        [7] or [size] - 	Size in bytes
        [8] or [atime] - 	Last access (as Unix timestamp)
        [9] or [mtime] - 	Last modified (as Unix timestamp)
        [10] or [ctime] - 		Last inode change (as Unix timestamp)
        [11] or [blksize] - 	Blocksize of filesystem IO (if supported)
        [12] or [blocks] - 	Number of blocks allocated

    </pre>

    <!-------------------------- PHP ftell() Function -------------------------->

    <h3>PHP ftell() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");

    // Print current position
    echo ftell($file);

    // Change current position
    fseek($file, "15");

    // Print current position again
    echo "<br>" . ftell($file);

    fclose($file);
    ?>

    <!-------------------------- PHP filetype() Function -------------------------->

    <h3>PHP filetype() Function</h3>

    <?php
    // Check filesize
    // echo filesize("wot.txt");
    // echo "<br>";

    // $file = fopen("wot.txt", "a+");
    // ftruncate($file, 100);
    // fclose($file);

    // // Clear cache and check filesize again
    // clearstatcache();
    // echo filesize("wot.txt");
    ?>

    <!-------------------------- PHP fwrite() Function -------------------------->

    <h3>PHP fwrite() Function</h3>

    <?php
    // $file = fopen("wot.txt", "w");
    // echo fwrite($file, "Hello World. Testing!");
    // fclose($file);
    ?>

    <!-------------------------- PHP glob() Function -------------------------->

    <h3>PHP glob() Function</h3>

    <?php
    print_r(glob("*.txt"));
    ?>

    <pre>

        Parameter Values

        pattern	Required. Specifies the pattern to search for

        flags			Optional. Specifies special settings.

        Possible values:

        GLOB_MARK - 		Adds a slash to each item returned
        GLOB_NOSORT - 	    Return files as they appear in the directory (unsorted)
        GLOB_NOCHECK - 	    Returns the search pattern if no match were found
        GLOB_NOESCAPE - 	Backslashes do not quote metacharacters
        GLOB_BRACE - 	    Expands {a,b,c} to match 'a', 'b', or 'c'
        GLOB_ONLYDIR - 	    Return only directories which match the pattern
        GLOB_ERR - 		    (added in PHP 5.1) Stop on errors (errors are ignored by default)

    </pre>

    <!-------------------------- PHP is_dir() Function -------------------------->

    <h3>PHP is_dir() Function</h3>

    <?php
    $file = "images";
    if (is_dir($file)) {
        echo ("$file is a directory");
    } else {
        echo ("$file is not a directory");
    }
    ?>

    <!-------------------------- PHP is_executable() Function -------------------------->

    <h3>PHP is_executable() Function</h3>

    <?php
    $file = "setup.exe";
    if (is_executable($file)) {
        echo ("$file is executable");
    } else {
        echo ("$file is not executable");
    }
    ?>

    <!-------------------------- PHP is_file() Function -------------------------->

    <h3>PHP is_file() Function</h3>

    <?php
    $file = "wot.txt";
    if (is_file($file)) {
        echo ("$file is a regular file");
    } else {
        echo ("$file is not a regular file");
    }
    ?>

    <!-------------------------- PHP is_link() Function -------------------------->

    <h3>PHP is_link() Function</h3>

    <?php
    $link = "images";
    if (is_link($link)) {
        echo ("$link is a link");
    } else {
        echo ("$link is not a link");
    }
    ?>

    <!-------------------------- PHP is_readable() Function -------------------------->

    <h3>PHP is_readable() Function</h3>

    <?php
    $file = "wot.txt";
    if (is_readable($file)) {
        echo ("$file is readable");
    } else {
        echo ("$file is not readable");
    }
    ?>

    <!-------------------------- PHP is_uploaded_file() Function -------------------------->

    <h3>PHP is_uploaded_file() Function</h3>

    <?php
    $file = "wot.txt";
    if (is_uploaded_file($file)) {
        echo ("$file is uploaded via HTTP POST");
    } else {
        echo ("$file is not uploaded via HTTP POST");
    }
    ?>

    <!-------------------------- PHP is_writable() Function -------------------------->

    <h3>PHP is_writable() Function</h3>

    <?php
    $file = "wot.txt";
    if (is_writable($file)) {
        echo ("$file is writable");
    } else {
        echo ("$file is not writable");
    }
    ?>

    <!-------------------------- PHP lchgrp() Function -------------------------->

    <h3>PHP lchgrp() Function</h3>

    <?php
    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);

    lchgrp($link, 8)
    ?>

    <!-------------------------- PHP lchown() Function -------------------------->

    <h3>PHP lchown() Function</h3>

    <?php
    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);

    lchown($link, 8)
    ?>

    <!-------------------------- PHP link() Function -------------------------->

    <h3>PHP link() Function</h3>

    <?php
    $target = "text.txt";
    $linkname = "mylink";

    link($target, $linkname);
    ?>

    <!-------------------------- PHP linkinfo() Function -------------------------->

    <h3>PHP linkinfo() Function</h3>

    <?php
    // echo linkinfo(/opt/lampp/htdocs/training/mylink);
    ?>

    <!-------------------------- PHP lstat() Function -------------------------->

    <h3>PHP lstat() Function</h3>

    <?php
    print_r(lstat("wot.txt"));
    ?>

    <!-------------------------- PHP mkdir() Function -------------------------->

    <h3>PHP mkdir() Function</h3>

    <?php
    mkdir("test");
    ?>

    <!-------------------------- PHP move_uploaded_file() Function -------------------------->

    <h3>PHP move_uploaded_file() Function</h3>

    <pre>
        The move_uploaded_file() function moves an uploaded file to a new destination.

        Note: This function only works on files uploaded via PHP's HTTP POST upload mechanism.

        Note: If the destination file already exists, it will be overwritten.
    </pre>

    <!-------------------------- PHP pathinfo() Function -------------------------->

    <?php
    print_r(pathinfo("/testweb/wot.txt"));
    ?>

    <!-------------------------- PHP pclose() Function -------------------------->

    <h3>PHP pclose() Function</h3>

    <?php
    $file = popen("/bin/ls", "r");
    //some code to be executed
    pclose($file);
    ?>

    <!-------------------------- PHP popen() Function -------------------------->

    <h3>PHP popen() Function</h3>

    <?php
    $file = popen("/bin/ls", "r");
    //some code to be executed
    pclose($file);
    ?>

    <!-------------------------- PHP readfile() Function -------------------------->

    <h3>PHP readfile() Function</h3>

    <?php
    echo readfile("wot.txt");
    ?>

    <!-------------------------- PHP readlink() Function -------------------------->

    <h3>PHP readlink() Function</h3>

    <?php
    echo readlink("/user/testlink");
    ?>

    <!-------------------------- PHP realpath() Function -------------------------->

    <h3>PHP realpath() Function</h3>

    <?php
    echo realpath("wot.txt");
    ?>

    <!-------------------------- PHP realpath_cache_get() Function -------------------------->

    <h3>PHP realpath_cache_get() Function</h3>

    <?php
    var_dump(realpath_cache_get());
    ?>

    <!-------------------------- PHP realpath_cache_size() Function -------------------------->

    <h3>PHP realpath_cache_size() Function</h3>

    <?php
    var_dump(realpath_cache_size());
    ?>

    <!-------------------------- PHP rename() Function -------------------------->

    <h3>PHP rename() Function</h3>

    <?php
    rename("images", "pictures");
    rename("/test/file1.txt", "/home/docs/my_file.txt");
    ?>

    <!-------------------------- PHP rewind() Function -------------------------->

    <h3>PHP rewind() Function</h3>

    <?php
    $file = fopen("wot.txt", "r");

    //Change position of file pointer
    fseek($file, "15");

    //Set file pointer to 0
    rewind($file);

    fclose($file);
    ?>

    <!-------------------------- PHP rmdir() Function -------------------------->

    <h3>PHP rmdir() Function</h3>

    <?php
    $path = "images";
    if (!rmdir($path)) {
        echo ("Could not remove $path");
    }
    ?>

    <!-------------------------- PHP set_file_buffer() Function -------------------------->

    <h3>PHP set_file_buffer() Function</h3>

    <?php
    $file = fopen("wot.txt", "w");
    if ($file) {
        set_file_buffer($file, 0);
        fwrite($file, "Hello World. Testing!");
        fclose($file);
    }
    ?>

    <!-------------------------- PHP stat() Function -------------------------->

    <h3>PHP stat() Function</h3>

    <?php
    $stat = stat("wot.txt");
    echo "Access time: " . $stat["atime"];
    echo "<br>Modification time: " . $stat["mtime"];
    echo "<br>Device number: " . $stat["dev"];
    ?>

    <!-------------------------- PHP symlink() Function -------------------------->

    <h3>PHP symlink() Function</h3>

    <?php
    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);
    echo readlink($link);
    ?>

    <!-------------------------- PHP tempnam() Function -------------------------->

    <h3>PHP tempnam() Function</h3>

    <?php
    echo tempnam("C:\inetpub\testweb", "TMP0");
    ?>

    <!-------------------------- PHP tmpfile() Function -------------------------->

    <h3>PHP tmpfile() Function</h3>

    <?php
    $temp = tmpfile();

    fwrite($temp, "Testing, testing.");
    //Rewind to the start of file
    rewind($temp);
    //Read 1k from file
    echo fread($temp, 1024);

    //This removes the file
    fclose($temp);
    ?>

    <!-------------------------- PHP touch() Function -------------------------->

    <h3>PHP touch() Function</h3>

    <?php
    $filename = "new.txt";
    if (touch($filename)) {
        echo $filename . " modification time has been changed to present time";
    } else {
        echo "Sorry, could not change modification time of " . $filename;
    }
    ?>

    <!-------------------------- PHP umask() Function -------------------------->

    <h3>PHP umask() Function</h3>

    <?php
    $file = "wot.txt";
    echo (umask());
    ?>

    <!-------------------------- $ PHP unlink() Function -------------------------->

    <h3>$ PHP unlink() Function</h3>

    <?php
    $file = fopen("new.txt", "w");
    echo fwrite($file, "Hello World. Testing!");
    fclose($file);

    unlink("new.txt");
    ?>



    <br><br><br>

</body>

</html>