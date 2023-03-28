<html>
<body>
<script>
    let username=localStorage.getItem("username");
    let email=localStorage.getItem("email");
    let age=localStorage.getItem("age");
    let dob=localStorage.getItem("dob");
    let contact=localStorage.getItem("contact")

    function clear()
    {
        if(confirm("Are you interested to clear all session variable from localStorage"))
        {
        localStorage.clear();
        alert("Session Variable values are cleared");
        window.location.reload();
        }

        
    } 


</script>
<?php

    echo "<h1> Dear <script> document.writeln(username); </script> (Accessed for localStorage) </h1>";
    
?>

<table border="2px">
<tr>
        <td> Variables  </td>
        <td> Values</td>
</tr>

<tr>
        <td> username  </td>
        <td> <script> document.writeln(username); </script> </td>
</tr>

<tr>
        <td> password </td>
        <td> <script> document.writeln(email); </script> </td>
</tr>

<tr>
        <td> age </td>
        <td> <script> document.writeln(age); </script> </td>
</tr>

<tr>
        <td> dob </td>
        <td> <script> document.writeln(dob); </script> </td>
</tr>

<tr>
        <td> contact </td>
        <td> <script> document.writeln(contact); </script> </td>
</tr>


</table>

<h1>
<a href="Javascript:clear()"> Click here to delete session variables from LocalStorage </a>
</h1>



<!-- <a href="redisstore.php"> Clik to redis </h1> -->

</body>
</html>