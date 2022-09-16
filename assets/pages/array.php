<?php
    include '../../scripts/checkSession.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="types.css">
    <title>Array</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container arrayinfo" id="container">
        <h1>Array Data Structure</h1>
        <p>As we know Array is considered as linear data structure that stores elements of same data types and it is also called as a linear homogenous data structure.</p>
        <div class="grid">
            <div class="">
                <p>Let's first see a real life example/application of Array</p>
                <p>Consider any Ticket Booking System. If we wanna book any seat we can just simple click and slect whichever seat we want. The arrangement of the seats can be viewed as a Two-Dimensional Array. Here, the seat booked is in 2<sup>nd</sup> row and 4<sup>th</sup> column. This is one of the real life example where Array is used.</p>
            </div>
            <div class="">
                <img src="../images/seats.png" class="img1" alt="">
            </div>
        </div>
        <h2>Types of Array</h2>
        <ul class="container">
            <li><h3>One Dimensional or Linear Array</h3></li>
            <p>The array elements are arranged in list form. It is the simplest form of array in which the elements are stored linearly and can be accessed individually by specifying the index value of each element stored in the array.</p>
            <img src="../images/a1.png" class="a1" alt="">
            <p>The above one dimensional array has 5 elements and they can be accessed individually by specifying the index value of that particular element. For example, to access value 9 from array with the help of the its index value which is 2.</p>
            <li><h3>Multidimensional Array</h3></li>
            <p>A multi-dimensional array is an array with more than one level or dimension. For example, a 2D array, or two-dimensional array, is an array of arrays, meaning it is a matrix of rows and columns (think of a table). 
            <img src="../images/a2.png" class="a2" alt="">
            A 3D array adds another dimension, turning it into an array of arrays of arrays.
            </p>
        </ul>
        <h2>Declaring an Array</h2>
        <p>Arrays are typically defined with square brackets with the size of the arrays as its argument. <br>
            Syntax: <br>
            1D Array:<b> int a[n];</b><br>
            2D Array:<b> int a[m][n];</b><br>
            3D Array:<b> int a[m][n][o];</b><br>
        </p>
            <img src="../images/a3.png" class="a3" alt="">
        <p>
            Initialization: <b>int a[6] = {2, 3, 5, 7, 11, 13};</b> here the element 2 will have index value 0, 3 will have index value 1 and so on.
        </p>
        <h2>Operations</h2>
        <p>The operations that can be performed of Array are: <b>Traversal, Insertion, Deletion, Searching, Sorting</b>. 
        <ol class="container">
            <li><b>Traversal</b>: Traversing an array means visiting each element once.</li>
            <li><b>Insertion</b>: Insertion in an array is the process of including one or more elements in an array. <br> Insertion of an element can be done: at the beginning, at the end and, at any given index of an array. </li>
            <li><b>Deletion</b>: Deletion of an element is the process of removing the desired element and re-organizing it.<br>You can also do deletion in different ways: at the beginning, at the end.</li>
            <li><b>Searching</b>: The method of searching for a specific value in an array is known as searching.<br>
                There are two ways we can search in an array, they are: Linear search, Binary search.</li>
            <li><b>Sorting</b>: Sorting in an array is the process in which it sorts elements in a user-defined order. There ar various algorithms for sorting a dataset with the help of array such as Bubble Sort, Selection Sort, Insertion Sort, Quick Sort, Merge Sort.</li>
        </ol>

        </p>
    </div>
</body>
</html>