<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $rec = db::getRecord($query);
    if ($rec != NULL) {
        $_SESSION['email'] = $_POST['email'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
}
//update admin
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($_FILES['doc_file']['name'] == "") {
        $sql2 = "UPDATE admin SET name='$name',password='$password'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['doc_file']['name'];
        $file_loc = $_FILES['doc_file']['tmp_name'];
        $file_size = $_FILES['doc_file']['size'];
        $file_type = $_FILES['doc_file']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";

    }
}

//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";
}



// update_logo
if (isset($_POST['update_logo'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id = $db->real_escape_string($_POST['id']);
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE logo SET dcp='$dcp'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE logo SET dcp='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='logo.php'</script>";
}

// update_banner
if (isset($_POST['update_banner'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $title = $db->real_escape_string($_POST['title']);

    $id = $db->real_escape_string($_POST['id']);
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE banner SET heading='$heading',dcp='$dcp',title='$title'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE banner SET heading='$heading',dcp='$dcp',title='$title',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='banner.php'</script>";
}

//add_categories
if (isset($_POST['add_categories'])) {
    $heading = $db->real_escape_string($_POST['heading']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $query_insert = "INSERT INTO `categories` (`heading`,`image`) VALUES ('$heading','$final_file')";

    db::query($query_insert);
    echo "<script>location='categories.php'</script>";
}
// update_categories
if (isset($_POST['update_categories'])) {
    $heading = $db->real_escape_string($_POST['heading']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE categories SET heading='$heading' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE categories SET heading='$heading',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='categories.php'</script>";
}

// del_categories
if (isset($_GET['del_categories'])) {
    $id = $_GET['del_categories'];
    $sql = "DELETE FROM categories WHERE id='$id'";
    db::query($sql);
    echo "<script>location='categories.php'</script>";
}

//add_subcategories
if (isset($_POST['add_subcategories'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $category_id = $db->real_escape_string($_POST['category_id']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $query_insert = "INSERT INTO `subcategories` (`heading`,`image`,`category_id`) VALUES ('$heading','$final_file','$category_id')";

    db::query($query_insert);
    echo "<script>location='subcategory.php'</script>";
}
// update_subcategories
if (isset($_POST['update_subcategories'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $category_id = $db->real_escape_string($_POST['category_id']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE subcategories SET heading='$heading',category_id='$category_id' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE subcategories SET heading='$heading',image='$final_file',category_id='$category_id' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='subcategory.php'</script>";
}

// del_subcategories
if (isset($_GET['del_subcategories'])) {
    $id = $_GET['del_subcategories'];
    $sql = "DELETE FROM subcategories WHERE id='$id'";
    db::query($sql);
    echo "<script>location='subcategory.php'</script>";
}

//add_product
if (isset($_POST['add_product'])) {
    $category = $db->real_escape_string($_POST['category']);
    $subcategory = $db->real_escape_string($_POST['subcategory']);
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);

    $query_insert = "INSERT INTO `product` (`heading`,`image`,`price`,`dcp`,`category_id`,`subcategory_id`) VALUES ('$heading','$final_file','$price','$dcp','$category','$subcategory')";

    db::query($query_insert);
    echo "<script>location='product.php'</script>";
}
// update_product
if (isset($_POST['update_product'])) {
    $category = $db->real_escape_string($_POST['category']);
    $subcategory = $db->real_escape_string($_POST['subcategory']);
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);

    $id = $_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE product SET heading='$heading',category_id='$category',dcp='$dcp',price='$price',subcategory_id='$subcategory' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE product SET heading='$heading',category_id='$category',dcp='$dcp',price='$price',subcategory_id='$subcategory',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='product.php'</script>";
}

// del_product
if (isset($_GET['del_product'])) {
    $id = $_GET['del_product'];
    $sql = "DELETE FROM product WHERE id='$id'";
    db::query($sql);
    echo "<script>location='product.php'</script>";
}

//add_news
if (isset($_POST['add_news'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `news` (`heading`,`image`,`dcp`,`price`) VALUES ('$heading','$final_file','$dcp','$price')";
    db::query($query_insert);
    echo "<script>location='news.php'</script>";
}

//update_news
if (isset($_POST['update_news'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE news SET heading='$heading',dcp='$dcp',price='$price' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE news SET heading='$heading',dcp='$dcp',image='$final_file',price='$price' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='news.php'</script>";
}
//del_news
if (isset($_GET['del_news'])) {
    $id = $_GET['del_news'];
    $sql = "DELETE FROM news WHERE id='$id'";
    db::query($sql);
    echo "<script>location='news.php'</script>";
}

//add_brand
if (isset($_POST['add_brand'])) {

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `brand` (`image`) VALUES ('$final_file')";
    db::query($query_insert);
    echo "<script>location='brand.php'</script>";
}

//update_brand
if (isset($_POST['update_brand'])) {

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE brand SET  WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE brand SET image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='brand.php'</script>";
}
//del_news
if (isset($_GET['del_news'])) {
    $id = $_GET['del_news'];
    $sql = "DELETE FROM news WHERE id='$id'";
    db::query($sql);
    echo "<script>location='news.php'</script>";
}

// update_contact_detail
if (isset($_POST['update_contact_detail'])) {
    $phone = $db->real_escape_string($_POST['phone']);
    $email = $db->real_escape_string($_POST['email']);
    $id = $db->real_escape_string($_POST['id']);
    $sql = "UPDATE contact_detail SET phone='$phone',email='$email'";
    db::query($sql);
    echo "<script>location='contact.php'</script>";
}

//add_contact
if (isset($_POST['add_contact'])) {
    $f_name = $db->real_escape_string($_POST['f_name']);
    $l_name = $db->real_escape_string($_POST['l_name']);
    $email = $db->real_escape_string($_POST['email']);
    $phone = $db->real_escape_string($_POST['phone']);
    $message = $db->real_escape_string($_POST['message']);

    $query_insert = "INSERT INTO `contact` (`f_name`,`l_name`,`email`,`phone`,`message`) VALUES ('$f_name','$l_name','$email','$phone','$message')";
    db::query($query_insert);
    echo "<script>location='../contact.php'</script>";
}

//del_contact
if (isset($_GET['del_contact'])) {
    $id = $_GET['del_contact'];
    $sql = "DELETE FROM contact WHERE id='$id'";
    db::query($sql);
    echo "<script>location='contact.php'</script>";
}
