<?php
require_once("/entities/product/class/php");
if(isset($_POST["bntsumit"])){
    $productName= $_POST["txtName"];
    $cateID=$_POST["txtCateID"];
    $prite=$_POST["txtprice"];
    $quantity=$_POST["txtquantity"];
    $description=$_POST["txtdesc"];
    $picture= $_POST["txtpic"];
    $newProduct= new Product($productName,$prite,$cateID,$quantity,$description,$picture);
    $result= $newProduct->save();
    if(!$result)
    {
        header("location: add_product.php?failure");

    }
    else{
        header("location:add_product.php?inserted");
    }
}

?>
<?php include_once("header.php");?>
<?php
    if(isset($_GET["inserted"])){
        echo"<h2> Thêm sản phẩm thành công</h2>";
    }
?>
<form method="post">
    <div class="row">
        <div class="lbltitle">
        <label>Tên sản phẩm</label>
        </div>
    <div class="lblinput">
        <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"])? $_POST["txtname"]:"";?>"/>
    </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label> Mô tả sản phẩm</label>
        </div>
    <div class="lbliput">
        <textarea name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"]: "" ;?>"></textarea>

    </div>

 </div>
 <div class="row">
 <div class="row">
 <div class="row">
 <div class="row">
 <div class="row">
    <div class="submit">
        <input type="submit" name=" btnsubmit" value=" Thêm sản phẩm"/>>
    </div>
</div>
</form>
<?php include_once("footer.php"); ?>